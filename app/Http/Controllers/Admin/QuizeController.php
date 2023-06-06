<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Model\Quize;
use App\Model\Poll;
// use App\Model\PollResult;
// use App\Model\QuizeResult;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class QuizeController extends Controller
{

   
    public function index()
    {
       
        $quize = Quize::get();
        return view('admin.Pages.quize.quize-index', ['quize' => $quize]);
    }

    public function pollindex()
    {
       
        $quize = Poll::get();
        return view('admin.Pages.poll.quize-index', ['quize' => $quize]);
    }

    public function show()
    {
        
        return view('admin.Pages.quize.quize-create');
    }
    public function pollshow()
    {
        
        return view('admin.Pages.poll.quize-create');
    }

    public function store(Request $request)
    {
        
        if (isset($request->quize_id) && $request->quize_id != null) {
           $quize = Quize::where(["quize_id"=>$request->quize_id])->first();;
          
           $quize->question = $request->question;
           $quize->option1 = $request->option1;
           $quize->option2 = $request->option2;
           $quize->option3 = $request->option3;
           $quize->option4 = $request->option4;
           $quize->answer = $request->answer;
           $quize->success_comment = $request->success_comment;
           $quize->failure_comment = $request->failure_comment;
          
           $quize->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
           
           $quize->save();
        } else {
           
            $quize = new Quize();
            $quize->question = $request->question;
            $quize->option1 = $request->option1;
            $quize->option2 = $request->option2;
            $quize->option3 = $request->option3;
            $quize->option4 = $request->option4;
            $quize->answer = $request->answer;
            $quize->success_comment = $request->success_comment;
            $quize->failure_comment = $request->failure_comment;
            $quize->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();           
            $quize->save();
        }
        return redirect()->route('admin-quize.index');
    }

    public function pollstore(Request $request)
    {
        
        if (isset($request->quize_id) && $request->quize_id != null) {
            $quize = Poll::where(["poll_id"=>$request->quize_id])->first();;

           $quize->question = $request->question;
           $quize->option1 = $request->option1;
           $quize->option2 = $request->option2;
           $quize->option3 = $request->option3;
           $quize->option4 = $request->option4;
           $quize->success_comment = $request->success_comment;
           $quize->failure_comment = $request->failure_comment;
           $quize->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
           
           $quize->save();
        } else {
           
            $quize = new Poll();
            $quize->question = $request->question;
            $quize->option1 = $request->option1;
            $quize->option2 = $request->option2;
            $quize->option3 = $request->option3;
            $quize->option4 = $request->option4;
            $quize->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
            $quize->success_comment = $request->success_comment;
            $quize->failure_comment = $request->failure_comment;           
            $quize->save();
        }
        return redirect()->route('admin-poll.index');
    }

    
    public function edit($id)
    {
        
        $quize_details = Quize::where(["quize_id"=>$id])->first();
        return view('admin.Pages.quize.quize-create', ['quize_details' => $quize_details]);
    }

    public function polledit($id)
    {
        
        $quize_details = Poll::where(["poll_id"=>$id])->first();
        return view('admin.Pages.poll.quize-create', ['quize_details' => $quize_details]);
    }

    public function delete($id)
    {
        Quize::find($id)->delete();
        return redirect()->back();
    }

    public function polldelete($id)
    {
        Poll::find($id)->delete();
        return redirect()->back();
    }

   

   
}
