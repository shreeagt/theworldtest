<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Quize;
use App\Model\QuizeResult;
use Carbon\Carbon;
class IndextestController extends Controller
{
    public function index()
    {
      
        $question1 = Quize::where(["quize_id"=>1])->first();
        $question2 = Quize::where(["quize_id"=>2])->first();
        $blogs = Blog::all();
        return view('frontend.indextest', compact('blogs',"question1","question2"));
    }

    public function resultstore(Request $request)
    {
      
            $quize = new QuizeResult();
            $quize->question_id = $request->question_id;
            $quize->ip_address =  $request->ip();
            $quize->answer = $request->answer;
            $quize->brower_name =$_SERVER['HTTP_USER_AGENT'];           
            $quize->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
            $quize->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();           
            $quize->save();
    }
    
    function get_browser_name($user_agent) {
        if (strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR/')) return 'Opera';
        elseif (strpos($user_agent, 'Edge')) return 'Edge';
        elseif (strpos($user_agent, 'Chrome')) return 'Chrome';
        elseif (strpos($user_agent, 'Safari')) return 'Safari';
        elseif (strpos($user_agent, 'Firefox')) return 'Firefox';
        elseif (strpos($user_agent, 'MSIE') || strpos($user_agent, 'Trident/7')) return 'Internet Explorer';
        
        return 'Other';
    }

    public function resultstorequestion2(Request $request)
    {
        $option= $request->dataOptions;
        $array = explode("-", $option);
        $question_id=$array[0];
        $option=$array[1];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $browserInfo = get_browser_name($userAgent, true);
        $browserName = $browserInfo['browser'];

        // $browser = get_browser(null, true);
        // print_r($browser);dd();

        // $quize = new QuizeResult();
        // $quize->question_id = $question_id;
        // $quize->ip_address =  $request->ip();
        // $quize->answer =$option;
        // $quize->brower_name =$browserName;           
        // $quize->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        // $quize->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();           
        // $quize->save();

        $option1=QuizeResult::where(["answer" => "Australia"])->count();
        $option2=QuizeResult::where(["answer" => "India"])->count();
        $option3=QuizeResult::where(["answer" => "Draw"])->count();
        $allcount = QuizeResult::where(["question_id" =>2])->count();
       
        $australia_per=($option1*100)/$allcount;
        $india_per=($option2*100)/$allcount;
        $draw_per=($option3*100)/$allcount;
       echo json_encode(["australia_per"=>$australia_per,"india_per"=>$india_per,"draw_per"=>$draw_per]);
    }

    public function report(Request $request)
    {
        

        $option1=QuizeResult::where(["question_id" =>2,"answer" => "Australia"])->count();
        $option2=QuizeResult::where(["question_id" =>2,"answer" => "India"])->count();
        $option3=QuizeResult::where(["question_id" =>2,"answer" => "Draw"])->count();
        $allcount = QuizeResult::where(["question_id" =>2])->count();
       
        $australia_per=($option1*100)/$allcount;
        $india_per=($option2*100)/$allcount;
        $draw_per=($option3*100)/$allcount;
       echo json_encode(["australia_per"=>$australia_per,"india_per"=>$india_per,"draw_per"=>$draw_per]);
    }


    public function show($id)
    {
        $blogs = Blog::findOrFail($id);
       
        return view('frontend.news.news_ind', compact('blogs'));
    }
}
