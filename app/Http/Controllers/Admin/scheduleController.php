<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Model\Schedule;
use App\Model\Teams;
use App\Model\Venues;

class scheduleController extends Controller
{
    private function storeFile($file)
    {

        $name = $file->getClientOriginalName();

        $name = pathinfo($name, PATHINFO_FILENAME);

        $name = str_replace(' ', '_', $name);
        //unique name to image
        $newImageName = time() . '-' . $name . '.' . $file->extension();



        $filePath = 'rswT20/' . $newImageName;

        # store image
        Storage::disk('s3')->put($filePath, file_get_contents($file));
        // dd('helo');

        $bucket_name = env('AWS_BUCKET');
        $region = env('AWS_DEFAULT_REGION');


        $url = 'https://' . $bucket_name . '.s3.' . $region . '.amazonaws.com/' . $filePath;





        return $url;
    }

    public function index()
    {
        $schedule = Schedule::get();
        return view('admin.Pages.schedule.index', ['schedules'=>$schedule]);
    }

    public function show()
    {
        $teams = Teams::get();
        $venues = Venues::get();
        return view('admin.Pages.schedule.create', ['teams'=>$teams, 'venues'=>$venues]);
    }

    public function store(Request $request)
    {
        // dd($request);

        if($request->team_1 == $request->team_2){
            return redirect()->back();
        } else{

            if(isset($request->schedule_id) && $request->schedule_id!=null){

                $schedule=Schedule::find($request->schedule_id);
    
                $schedule->match_date = $request->match_date;
                $schedule->match_time = $request->match_time;
                $schedule->match_venue = $request->match_venue;
                $schedule->team_1 = $request->team_1;
                $schedule->team_2 = $request->team_2;
                $schedule->save();
            }else{
    
                $schedule = new Schedule();
    
                $schedule->match_date = $request->match_date;
                $schedule->match_time = $request->match_time;
                $schedule->match_venue = $request->match_venue;
                $schedule->team_1 = $request->team_1;
                $schedule->team_2 = $request->team_2;
                $schedule->save();
            }

            return redirect()->route('schedule.index');
        }

        
    }
}