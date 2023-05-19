<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Model\Teams;
use App\Model\Players;

class playersController extends Controller
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
        $players = Players::get();
        return view('admin.Pages.players.index', ['players'=>$players]);
    }

    public function show()
    {
        $teams = Teams::get();
        return view('admin.Pages.players.create', ['teams'=>$teams]);
    }

    public function store(Request $request)
    {
        // dd($request);
        $allFiles = $request->allFiles();
        $player_image = null;

        if (isset($allFiles['player_image'])) {

            $player_image = $this->storeFile($allFiles['player_image']);
        }

        if(isset($request->player_id) && $request->player_id!=null){

            $player=Players::find($request->player_id);

            $player->player_name = $request->player_name;
            $player->player_key = $request->player_key;
            $player->player_tag = $request->player_tag;
            $player->player_keywords = $request->player_keywords;
            if($player_image!=null){
                $player->player_image = $player_image;
            }
            $player->player_team = $request->player_team;
            $player->player_speciality = $request->player_speciality;
            $player->player_position = $request->player_position;
            $player->save();
        }else{

            $player = new Players();

            $player->player_name = $request->player_name;
            $player->player_key = $request->player_key;
            $player->player_tag = $request->player_tag;
            $player->player_keywords = $request->player_keywords;
            $player->player_image = $player_image;
            $player->player_team = $request->player_team;
            $player->player_speciality = $request->player_speciality;
            $player->player_position = $request->player_position;
            $player->save();
        }

        return redirect()->route('admin-players.index');
    }

    public function delete($id){
        Players::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $teams = Teams::get();
        $player_details=Players::find($id);
        return view('admin.Pages.players.create',['teams'=>$teams,'player_details'=>$player_details]);
    }
}