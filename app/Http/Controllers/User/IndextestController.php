<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
use App\Model\Quize;
use App\Model\Poll;
use App\Model\PollResult;
use App\Model\QuizeResult;
use Carbon\Carbon;
use DB;
class IndextestController extends Controller
{
    public function index()
    {
      
        $question1 = Quize::where(["status"=>"Active"])->first();
        $question2 = Poll::where(["status"=>"Active"])->first();
        $blogs = Blog::all();
        return view('frontend.indextest', compact('blogs',"question1","question2"));
    }

    public function triviaindex()
    {      
        $question1 = Quize::where(["status"=>"Active"])->first();       
        return view('frontend.trivia.trivia', compact("question1"));
    }

    public function pollindex()
    {
      
        
        $question2 = Poll::where(["status"=>"Active"])->first();
       
        return view('frontend.polls.polls', compact("question2"));
    }

    public function resultstore(Request $request)
    {
        $option= $request->answer;
        $array = explode("-", $option);
        $quize_id=$array[0];
        $option=$array[1];

        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $browserName = $this->get_browser_name($userAgent, true);
        $quize = new QuizeResult();
        $quize->question_id = $quize_id;
        $quize->ip_address =  $request->ip();
        $quize->answer = $option;
        $quize->brower_name =$browserName;           
        $quize->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        $quize->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();           
        $quize->save();
        $getanswer =Quize::where(["quize_id"=>$quize_id])->first();
        if($option==$getanswer->answer){
            echo json_encode("1");
        }else{
            echo json_encode("2");
        }
       
    }
    
    public function get_browser_name($user_agent) {
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
        $poll_id=$array[0];
        $option=$array[1];
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        $browserName = $this->get_browser_name($userAgent, true);

        $quize = new PollResult();
        $quize->poll_id = $poll_id;
        $quize->ip_address =  $request->ip();
        $quize->answer =$option;
        $quize->brower_name =$browserName;           
        $quize->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        $quize->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();           
        $quize->save();   

        $get_data = Poll::where(["poll_id"=>$poll_id])->first();
        $result = DB::select("SELECT COUNT(poll_result_id) AS answer_cnt, answer, poll_id FROM poll_of_the_day_result WHERE poll_id = $poll_id GROUP BY answer");
        $allcount=0;
        $main=[];
        
        foreach($result as $list){
            $allcount= $allcount+$list->answer_cnt;
            if($get_data->option1==$list->answer){               
                $main[$list->answer]=$list->answer_cnt;
            }                
            elseif($get_data->option2==$list->answer){                
                $main[$list->answer]=$list->answer_cnt;
            }elseif($get_data->option3==$list->answer){
                $main[$list->answer]=$list->answer_cnt;
            }
            
        }  
        $anwser="";
        if($allcount!=0){
            $australia_per=((isset($main[$get_data->option1]) && !empty($main[$get_data->option1]) ?$main[$get_data->option1]:0)*100)/$allcount;
            $india_per=((isset($main[$get_data->option2]) && !empty($main[$get_data->option2]) ?$main[$get_data->option2]:0)*100)/$allcount;
            $draw_per=((isset($main[$get_data->option3]) && !empty($main[$get_data->option3]) ?$main[$get_data->option3]:0)*100)/$allcount;
            $anwser=$option;
        }else{
            $australia_per=0;
            $india_per=0;
            $draw_per=0;
        }
       
        echo json_encode(["australia_per"=>round($australia_per),"india_per"=>round($india_per),"draw_per"=>round($draw_per),"answer"=>$option]);
    }

    public function report($poll_id=0)
    {

        $get_data = Poll::where(["poll_id"=>$poll_id])->first();
        $result = DB::select("SELECT COUNT(poll_result_id) AS answer_cnt, answer, poll_id FROM poll_of_the_day_result WHERE poll_id = $poll_id GROUP BY answer");
        $allcount=0;
        $main=[];
        
        foreach($result as $list){
            $allcount= $allcount+$list->answer_cnt;
            if($get_data->option1==$list->answer){               
                $main[$list->answer]=$list->answer_cnt;
            }                
            elseif($get_data->option2==$list->answer){                
                $main[$list->answer]=$list->answer_cnt;
            }elseif($get_data->option3==$list->answer){
                $main[$list->answer]=$list->answer_cnt;
            }            
        }
        
        if($allcount!=0){
            $australia_per=((isset($main[$get_data->option1]) && !empty($main[$get_data->option1]) ?$main[$get_data->option1]:0)*100)/$allcount;
            $india_per=((isset($main[$get_data->option2]) && !empty($main[$get_data->option2]) ?$main[$get_data->option2]:0)*100)/$allcount;
            $draw_per=((isset($main[$get_data->option3]) && !empty($main[$get_data->option3]) ?$main[$get_data->option3]:0)*100)/$allcount;
        }else{
            $australia_per=0;
            $india_per=0;
            $draw_per=0;
        }
        
       
        
        echo json_encode(["australia_per"=>$australia_per,"india_per"=>$india_per,"draw_per"=>$draw_per]);
       
    }


    public function show($id)
    {
        $blogs = Blog::findOrFail($id);
       
        return view('frontend.news.news_ind', compact('blogs'));
    }
}
