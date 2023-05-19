<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Teams;

class teamsController extends Controller
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
        $teams = Teams::get();
        return view('admin.Pages.teams.index', ['teams'=> $teams]);
    }

    public function show()
    {
        return view('admin.Pages.teams.create');
    }

    public function store(Request $request)
    {
        $allFiles = $request->allFiles();
        $team_logo = null;
        $team_banner = null;

        if (isset($allFiles['team_logo'])) {

            $team_logo = $this->storeFile($allFiles['team_logo']);
        }
        if (isset($allFiles['team_banner'])) {

            $team_banner = $this->storeFile($allFiles['team_banner']);
        }

        if(isset($request->team_id) && $request->team_id!=null){

            $this->validate($request, [
                'team_name' => ['required', 'unique:teams'],
            ]);

            $teams=Teams::find($request->team_id);

            $teams->team_name = $request->team_name;
            $teams->team_key = $request->team_key;
            $teams->team_tag = $request->team_tag;
            $teams->team_keywords = $request->team_keywords;
            if($team_banner!=null){
                $teams->team_banner = $team_banner;
            }
            if($team_logo!=null){
                $teams->team_logo = $team_logo;
            }
            
            $teams->save();
        }else{
            $this->validate($request, [
                'team_name' => ['required', 'unique:teams'],
            ]);

            $teams = new Teams();

            $teams->team_name = $request->team_name;
            $teams->team_key = $request->team_key;
            $teams->team_tag = $request->team_tag;
            $teams->team_keywords = $request->team_keywords;
            $teams->team_banner = $team_banner;
            $teams->team_logo = $team_logo;
            $teams->save();
        }

        return redirect()->route('admin-teams.index');
    }

    public function delete($id){
        Teams::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $teams_details=Teams::find($id);
        return view('admin.Pages.teams.create',['teams_details'=>$teams_details]);
    }
}