<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Photos;
use App\Model\PhotoCategory;
use App\Model\GalleryCatergory;
use Carbon\Carbon;
class PhotosController extends Controller
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
        $photos = Photos::get();
        return view('admin.Pages.photos.index', ['photos' => $photos]);
    }

    public function show()
    {
        $photo_categories = PhotoCategory::where('category_status', 'Y')->get();
        return view('admin.Pages.photos.create', ['photo_categories' => $photo_categories]);
    }

    public function store(Request $request)
    {
        $allFiles = $request->allFiles();
        $thumbnail = null;
        $photo_banner = null;

        if (isset($allFiles['photo_thumbnail'])) {

            $thumbnail = $this->storeFile($allFiles['photo_thumbnail']);
        }
        if (isset($allFiles['photo_banner'])) {

            $photo_banner = $this->storeFile($allFiles['photo_banner']);
        }
        if (isset($request->photo_id) && $request->photo_id != null) {
            $photo = Photos::find($request->photo_id);

            $photo->photos_title = $request->photo_title;
            $photo->photos_url = $request->photos_url;
            $photo->photos_category_id = $request->photo_category_id;
            $photo->photos_description = $request->photo_description;
            $photo->photos_keyword = $request->photo_keyword;
            $photo->photos_tag = $request->photo_tag;

            $photo->photos_body = $request->editor;
            if ($thumbnail != null) {
                $photo->photos_thumbnail = $thumbnail;
            }
            $photo->photos_banner_type = $request->photo_banner_type;
            if ($photo_banner != null) {
                $photo->photos_banner = $photo_banner;
            }
            $photo->photos_status = $request->photo_status;

            if ($photo->photos_status == "Draft" && $request->photos_status == "Publish") {
                $photo->published_date = Carbon::now('Asia/Kolkata')->toDateString();
            }
            $photo->save();
        } else {
            $this->validate($request, [
                'photos_url' => ['required', 'unique:photos'],
            ]);

            $new_photo = new Photos();
            $new_photo->photos_title = $request->photo_title;
            $new_photo->photos_url = $request->photos_url;
            $new_photo->photos_category_id = $request->photo_category_id;
            $new_photo->photos_description = $request->photo_description;
            $new_photo->photos_keyword = $request->photo_keyword;
            $new_photo->photos_tag = $request->photo_tag;

            $new_photo->photos_body = $request->editor;
            $new_photo->photos_thumbnail = $thumbnail;
            $new_photo->photos_banner_type = $request->photo_banner_type;
            $new_photo->photos_banner = $photo_banner;
            $new_photo->photos_status = $request->photo_status;

            if ($request->photos_status == "Publish") {
                $new_photo->published_date = Carbon::now('Asia/Kolkata')->toDateString();
            }
            $new_photo->save();
        }
        return redirect()->route('admin-photos.index');
    }

    // public function store(Request $request)
    // {
    //     $allFiles = $request->allFiles();
    //     $thumbnail = null;
    //     $blog_banner = null;

    //     if (isset($allFiles['blog_thumbnail'])) {

    //         $thumbnail = $this->storeFile($allFiles['blog_thumbnail']);
    //     }
    //     if (isset($allFiles['blog_banner'])) {

    //         $blog_banner = $this->storeFile($allFiles['blog_banner']);
    //     }
    //     if (isset($request->blog_id) && $request->blog_id != null) {
    //         $blog = Blog::find($request->blog_id);

    //         $blog->blog_title = $request->blog_title;
    //         $blog->blog_url = $request->blog_url;
    //         $blog->blog_description = $request->blog_description;
    //         $blog->blog_keyword = $request->blog_keyword;
    //         $blog->blog_tag = $request->blog_tag;

    //         $blog->blog_body = $request->editor;
    //         if ($thumbnail != null) {
    //             $blog->blog_thumbnail = $thumbnail;
    //         }
    //         $blog->blog_banner_type = $request->blog_banner_type;
    //         if ($blog_banner != null) {
    //             $blog->blog_banner = $blog_banner;
    //         }
    //         $blog->blog_status = $request->blog_status;

    //         if ($blog->blog_status == "Draft" && $request->blog_status == "Publish") {
    //             $blog->published_date = Carbon::now('Asia/Kolkata')->toDateString();
    //         }
    //         $blog->save();
    //     } else {
    //         $this->validate($request, [
    //             'blog_url' => ['required', 'unique:blogs'],
    //         ]);

    //         $new_blog = new Blog();
    //         $new_blog->blog_title = $request->blog_title;
    //         $new_blog->blog_url = $request->blog_url;
    //         $new_blog->blog_description = $request->blog_description;
    //         $new_blog->blog_keyword = $request->blog_keyword;
    //         $new_blog->blog_tag = $request->blog_tag;

    //         $new_blog->blog_body = $request->editor;
    //         $new_blog->blog_thumbnail = $thumbnail;
    //         $new_blog->blog_banner_type = $request->blog_banner_type;
    //         $new_blog->blog_banner = $blog_banner;
    //         $new_blog->blog_status = $request->blog_status;

    //         if ($request->blog_status == "Publish") {
    //             $new_blog->published_date = Carbon::now('Asia/Kolkata')->toDateString();
    //         }
    //         $new_blog->save();
    //     }
    //     return redirect()->route('admin-blogs.index');
    // }

    public function edit($id)
    {
        $photo_details = Photos::find($id);
        $photo_categories = PhotoCategory::where('category_status', 'Y')->get();

        return view('admin.Pages.photos.create', ['photo_details' => $photo_details, 'photo_categories' => $photo_categories]);
    }
    public function delete($id)
    {
        Photos::find($id)->delete();
        return redirect()->back();
    }

    public function createCategory()
    {
        return view('admin.Pages.photos.create-category');
    }

    public function storeCategory(Request $request)
    {

        $allFiles = $request->allFiles();
        $category_thumbnail = null;
        $category_banner = null;

        if (isset($allFiles['category_thumbnail'])) {

            $category_thumbnail = $this->storeFile($allFiles['category_thumbnail']);
        }
        if (isset($allFiles['category_banner'])) {

            $category_banner = $this->storeFile($allFiles['category_banner']);
        }
        $new_photo_category = new PhotoCategory();
        $new_photo_category->category_title = $request->name;
        $new_photo_category->category_description = $request->category_description;
        $new_photo_category->category_body = $request->editor;
        $new_photo_category->category_thumbnail = $category_thumbnail;
        $new_photo_category->category_banner = $category_banner;
        $new_photo_category->seo_title = $request->seo_title;
        $new_photo_category->seo_tag = $request->seo_tag;
        $new_photo_category->seo_keyword = $request->seo_keyword;
        $new_photo_category->category_status = $request->category_status;

        $new_photo_category->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        $new_photo_category->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        $new_photo_category->save();
        return redirect()->route('admin-photos-category.index');
    }

    public function showCategory(){
      $photos_categories=PhotoCategory::get();
      return view('admin.Pages.photos.category-index',['photos_categories'=>$photos_categories]);
    }
    public function indexgallery() {
        $gallery = GalleryCatergory::all();
        return view('gallery', ['gallery' => $gallery]);
    }
    public function creategallery() {
        return view ('creategallery');
    }
    public function insertgallery(Request $request) 
    {
        $g_catergory = new GalleryCatergory;
        $g_catergory->gallerytitle = $request->input('gallerytitle');
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/gallery/', $filename);
            $g_catergory->image = $filename; 
        } else {
            $g_catergory->image = '';
        }
    
        $g_catergory->save();
    
        return view('creategallery')->with('creategallery', $g_catergory);
    }
    public function showgallery()
    {
       
        $gallery = GalleryCatergory::all(); // Assuming you have a Gallery model

        return view('frontend.gallery.detail', ['gallery' => $gallery]);
    }
    public function destroy($id)
    {
        $gallery = GalleryCatergory::find($id);
        // Perform any necessary deletion logic
        $gallery->delete();
        return redirect()->back()->with('success', 'Gallery item deleted successfully.');
    }
    public function editgallery($id)
    {
        $gallery = GalleryCatergory::find($id);
        return view('editgallery', ['gallery' => $gallery]);
    }
    public function updategallery(Request $request, $id)
    {
        $gallery = GalleryCatergory::find($id);
    
        // Update the fields you want to edit
        $gallery->gallerytitle = $request->input('gallerytitle');
    
        // Check if a new image was uploaded and update the image field
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/gallery/', $filename);
            $gallery->image = $filename; 
        }
    
        $gallery->save();
    
        return redirect()->back()->with('success', 'Gallery item updated successfully.');
    }

}