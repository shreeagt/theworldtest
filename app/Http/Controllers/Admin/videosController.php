<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Videos;
use App\Model\VideoCategory;
use App\Model\Youtube;
use Carbon\Carbon;
class videosController extends Controller
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
        $videos = Videos::get();
        return view('admin.Pages.videos.index', ['videos' => $videos]);
    }

    public function show()
    {
        $video_categories=VideoCategory::where('category_status','Y')->get();
        return view('admin.Pages.videos.create',['video_categories'=>$video_categories]);
    }

    public function store(Request $request)
    {
        $allFiles = $request->allFiles();
        $thumbnail = null;
        $video_banner = null;

        if (isset($allFiles['video_thumbnail'])) {

            $thumbnail = $this->storeFile($allFiles['video_thumbnail']);
        }
        if (isset($allFiles['video_banner'])) {

            $video_banner = $this->storeFile($allFiles['video_banner']);
        }

        if(isset($request->video_id) && $request->video_id!=null){
            $video=Videos::find($request->video_id);
            $video->video_title = $request->video_title;
            $video->video_url = $request->video_url;
            $video->video_description = $request->video_description;
            $video->video_keyword = $request->video_keyword;
            $video->video_tag = $request->video_tag;
    
            $video->video_body = $request->editor;
            if($thumbnail!=null){
                $video->video_thumbnail = $thumbnail;
            }
            $video->video_banner_type = $request->video_banner_type;
            if($video_banner!=null){
                $video->video_banner = $video_banner;
            }
            $video->video_status = $request->video_status;

            if($video->video_status=="Draft" && $request->video_status=="Publish"){
                $video->published_date=Carbon::now('Asia/Kolkata')->toDateString();
            }

            $video->save();
        } else{

            $this->validate($request, [
                'video_url' => ['required', 'unique:videos'],
            ]);
            
    
            $new_video = new Videos();
            $new_video->video_title = $request->video_title;
            $new_video->video_url = $request->video_url;
            $new_video->video_description = $request->video_description;
            $new_video->video_keyword = $request->video_keyword;
            $new_video->video_tag = $request->video_tag;
    
            $new_video->video_body = $request->editor;
            $new_video->video_thumbnail = $thumbnail;
            $new_video->video_banner_type = $request->video_banner_type;
            $new_video->video_banner = $video_banner;
            $new_video->video_status = $request->video_status;
            $new_video->created_at = Carbon::now('Asia/Kolkata')->toDateString();
    
            if($request->video_status=="Publish"){
                $new_video->published_date=Carbon::now('Asia/Kolkata')->toDateString();
            }
            $new_video->save();
        }

        return redirect()->route('admin-videos.index');
    }

    public function delete($id){
        Videos::find($id)->delete();
        return redirect()->back();
    }

    public function edit($id){
        $videos_details=Videos::find($id);
        $video_categories=VideoCategory::where('category_status','Y')->get();
        return view('admin.Pages.videos.create',['videos_details'=>$videos_details,'video_categories'=>$video_categories]);
    }

    public function createCatgeory(){
        return view('admin.Pages.videos.create-category');
    }
    public function storeCatgeory(Request $request){
    
        $allFiles = $request->allFiles();
        $category_thumbnail=null;
        $category_banner=null;
     
        if (isset($allFiles['category_thumbnail'])) {
  
            $category_thumbnail = $this->storeFile($allFiles['category_thumbnail']);
         }
         if (isset($allFiles['category_banner'])) {
  
            $category_banner = $this->storeFile($allFiles['category_banner']);
         }
        $new_blog_category=new VideoCategory();
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
        return redirect()->route('admin-videos.index');
    }


    public function showCategory(){
        $video_categories=VideoCategory::get();
        return view('admin.Pages.videos.category-index',['video_categories'=>$video_categories]);
      }

      public function Youtube(){
        $youtubevideos = Youtube::all();
        return view('Youtube', ['youtubevideos' => $youtubevideos]);
    }
      public function AddYoutube() {
        return view('AddYoutube');
      }
      public function insertyoutube(Request $request)
      {
          $video = new Youtube();
          $video->videotitle = $request->input('videotitle');
          $video->description = $request->input('description');
          $video->videourl = $request->input('videourl');
          $video->video_id = $request->input('video_id');

          if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('youtube/gallery/', $filename);
            $video->image = $filename; 
        } else {
            $video->image = '';
        }
          $video->save();
      }
      public function showVideos()
      {
          $youtubevideos = Youtube::all(); 
        //   dd($youtubevideos);
          return view('frontend.video.video', compact('youtubevideos'));
      }
      public function deleteVideo($id)
      {
          $video = Youtube::find($id);
          $video->delete();
      
          return redirect()->back()->with('success', 'Video deleted successfully');
      }
      public function editVideo($id)
      {
          $video = Youtube::find($id);
          return view('editvideo', compact('video'));
      }
      public function updateVideo(Request $request, $id)
      {
          $video = Youtube::find($id);
          $video->videotitle = $request->input('videotitle');
          $video->description = $request->input('description');
          $video->videourl = $request->input('videourl');
          $video->video_id = $request->input('video_id');
      
          if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('youtube/gallery/', $filename);
            $video->image = $filename; 
        } else {
            $video->image = '';
        
          }
      
          $video->save();
      
          // Redirect or perform any other necessary logic
      }


}
