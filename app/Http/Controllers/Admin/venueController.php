<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Venues;

class venueController extends Controller
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
        $venues = Venues::get();
        return view('admin.Pages.venues.index', ['venues'=>$venues]);
    }

    public function show()
    {
        return view('admin.Pages.venues.create');
    }

    public function store(Request $request)
    {
        $allFiles = $request->allFiles();
        $venue_thumbnail = null;

        if (isset($allFiles['venue_thumbnail'])) {

            $venue_thumbnail = $this->storeFile($allFiles['venue_thumbnail']);
        }

        if(isset($request->venue_id) && $request->venue_id!=null){
            
            $venues=Venues::find($request->venue_id);

            $venues->venue_name = $request->venue_name;
            $venues->venue_key = $request->venue_key;
            $venues->venue_tag = $request->venue_tag;
            $venues->venue_keywords = $request->venue_keywords;
            if($venue_thumbnail!=null){
                $venues->venue_thumbnail = $venue_thumbnail;
            }
            $venues->save();

        } else{

            $this->validate($request, [
                'venue_name' => ['required', 'unique:venues'],
            ]);
            $venues = new Venues;

            $venues->venue_name = $request->venue_name;
            $venues->venue_key = $request->venue_key;
            $venues->venue_tag = $request->venue_tag;
            $venues->venue_keywords = $request->venue_keywords;
            $venues->venue_thumbnail = $venue_thumbnail;
            $venues->save();
        }

        return redirect()->route('admin-venues.index');
    }

    public function delete($id){
        Venues::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $venue_details=Venues::find($id);
        return view('admin.Pages.venues.create',['venue_details'=>$venue_details]);
    }
}