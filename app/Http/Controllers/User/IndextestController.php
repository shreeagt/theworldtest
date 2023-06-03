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


    public function show($id)
    {
        $blogs = Blog::findOrFail($id);
       
        return view('frontend.news.news_ind', compact('blogs'));
    }
}
