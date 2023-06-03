<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Blog;
class NewsController extends Controller
{
    public function index()
    {
    
        // Retrieve the blogs
        $blogs = Blog::all();
       
        // Pass the blogs to the view
        return view('frontend.news.news', compact('blogs'));
    }
    
    public function show($id)
    {
    
        
        $blogs = Blog::findOrFail($id); // Assuming you have a "Blog" model
        
        return view('frontend.news.news_ind', compact('blogs'));
    }
}



