<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;

class IndextestController extends Controller
{
    public function index()
    {
       
        $blogs = Blog::all();
        return view('frontend.indextest', compact('blogs'));
    }

    public function show($id)
    {
        $blogs = Blog::findOrFail($id);
        dd($id);
        return view('frontend.news.news_ind', compact('blogs'));
    }
}
