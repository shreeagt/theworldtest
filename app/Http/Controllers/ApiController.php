<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ApiController extends controller
{


    public function curlOperations(Request $request){
        $curl = curl_init();
        $PROJ_KEY = 'RS_P_1485144667195576408';
        $API_TOKEN = 'RS5:a3ed3aa9394d027e53a820c3213fa496';
        $TOURNAMENT_KEY = 'ausind_2020';
        $PLAYER_KEY = 's_samson';

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.sports.roanuz.com/v5/core/${PROJ_KEY}/auth/",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "{\n    \"api_key\": \"${API_TOKEN}\"\n}",
            CURLOPT_HTTPHEADER => array(
                "Content-Type: application/json"
            ) ,
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        dd($response);
    }
}