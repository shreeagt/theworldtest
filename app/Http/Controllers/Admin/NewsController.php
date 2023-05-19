<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Model\News;
use App\Model\NewsCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewsController extends Controller {
    
    private function storeFile($file) {
        
        $name = $file->getClientOriginalName();
    
        $name= pathinfo($name, PATHINFO_FILENAME);
        
        $name = str_replace(' ', '_', $name);
        //unique name to image
        $newImageName = time().'-'.$name.'.'.$file->extension();
        
        
        
        $filePath = 'rswT20/' . $newImageName;
        
        # store image
        Storage::disk('s3')->put($filePath, file_get_contents($file));
        // dd('helo');
    
        $bucket_name = env('AWS_BUCKET');
        $region = env('AWS_DEFAULT_REGION');
        
       
        $url = 'https://'.$bucket_name.'.s3.'.$region.'.amazonaws.com/'.$filePath;
       
    
      
    
    
        return $url;
    }

    public function index(){
        $news=News::get();
     return view('admin.Pages.news.index',['news'=>$news]);
    }

    public function show(){
      $news_categories=NewsCategory::where('category_status','Y')->get();
        return view('admin.Pages.news.create',['news_categories'=>$news_categories]);
    }

    public function store(Request $request){
         $allFiles = $request->allFiles();
         $thumbnail=null;
         $news_banner=null;
      
         if (isset($allFiles['news_thumbnail'])) {
 
             $thumbnail = $this->storeFile($allFiles['news_thumbnail']);
          }
          if (isset($allFiles['news_banner'])) {
 
             $news_banner = $this->storeFile($allFiles['news_banner']);
          }
         if(isset($request->news_id) && $request->news_id!=null){
           $news=News::find($request->news_id);

           $news->news_title=$request->news_title;
           $news->news_url=$request->news_url;
           $news->news_category_id=$request->news_category_id;
           $news->news_description=$request->news_description;
           $news->news_keyword=$request->news_keyword;
           $news->news_tag=$request->news_tag;
     
           $news->news_body=$request->editor;
           if($thumbnail!=null){
           $news->news_thumbnail=$thumbnail;
           }
           $news->news_banner_type=$request->news_banner_type;
           if($news_banner!=null){
           $news->news_banner=$news_banner;
           }
           $news->news_status=$request->news_status;
     
           if($request->news_status=="Publish"){
             $news->published_date=Carbon::now('Asia/Kolkata')->toDateString();
           }
           $news->save();

         }else{
        $this->validate($request, [
            'news_url'=>['required', 'unique:news'],
        ]);

      $new_news=new News();
      $new_news->news_title=$request->news_title;
      $new_news->news_url=$request->news_url;
      $new_news->news_category_id=$request->news_category_id;
      $new_news->news_description=$request->news_description;
      $new_news->news_keyword=$request->news_keyword;
      $new_news->news_tag=$request->news_tag;

      $new_news->news_body=$request->editor;
      $new_news->news_thumbnail=$thumbnail;
      $new_news->news_banner_type=$request->news_banner_type;
      $new_news->news_banner=$news_banner;
      $new_news->news_status=$request->news_status;

      if($request->news_status=="Publish"){
        $new_news->published_date=Carbon::now('Asia/Kolkata')->toDateString();
      }
      $new_news->save();
    }
      return redirect()->route('admin-news.index');

    }

    public function edit($id){
      $news_details = News::find($id);
      $news_categories = NewsCategory::where('category_status', 'Y')->get();

      return view('admin.Pages.news.create', ['news_details' => $news_details, 'news_categories' => $news_categories]);
    }
    public function delete($id){
        Blog::find($id)->delete();
        return redirect()->back();

    }

    public function createCategory(){
      return view('admin.Pages.news.create-category');
    }

    public function storeCategory(Request $request){
 
      $allFiles = $request->allFiles();
      $category_thumbnail=null;
      $category_banner=null;
   
      if (isset($allFiles['category_thumbnail'])) {

          $category_thumbnail = $this->storeFile($allFiles['category_thumbnail']);
       }
       if (isset($allFiles['category_banner'])) {

          $category_banner = $this->storeFile($allFiles['category_banner']);
       }
      $new_blog_category=new NewsCategory();
      $new_blog_category->category_title=$request->name;
      $new_blog_category->category_description=$request->category_description;
      $new_blog_category->category_body=$request->editor;
      $new_blog_category->category_thumbnail=$category_thumbnail;
      $new_blog_category->category_banner=$category_banner;
      $new_blog_category->seo_title=$request->seo_title;
      $new_blog_category->seo_tag=$request->seo_tag;
      $new_blog_category->seo_keyword=$request->seo_keyword;
      $new_blog_category->category_status=$request->category_status;

      $new_blog_category->created_at=Carbon::now('Asia/Kolkata')->toDateTimeString();
      $new_blog_category->updated_at=Carbon::now('Asia/Kolkata')->toDateTimeString();
      $new_blog_category->save();
      return redirect()->route('admin-news.index');

    }

    public function showCategory(){
      $news_categories=NewsCategory::get();
      return view('admin.Pages.news.category-index',['news_categories'=>$news_categories]);
    }
}