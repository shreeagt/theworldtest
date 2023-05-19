<?php

namespace App\Http\Controllers\Admin;

use DB;
use Auth;
use Config;
use Storage;
use App\Model\Blog;
use App\Model\BlogCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class BlogController extends Controller
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
        $blogs = Blog::get();
        return view('admin.Pages.blogs.index', ['blogs' => $blogs]);
    }

    public function show()
    {
        $blog_categories = BlogCategory::where('category_status', 'Y')->get();
        return view('admin.Pages.blogs.create', ['blog_categories' => $blog_categories]);
    }

    public function store(Request $request)
    {
        $allFiles = $request->allFiles();
        $thumbnail = null;
        $blog_banner = null;

        if (isset($allFiles['blog_thumbnail'])) {

            $thumbnail = $this->storeFile($allFiles['blog_thumbnail']);
        }
        if (isset($allFiles['blog_banner'])) {

            $blog_banner = $this->storeFile($allFiles['blog_banner']);
        }
        if (isset($request->blog_id) && $request->blog_id != null) {
            $blog = Blog::find($request->blog_id);

            $blog->blog_title = $request->blog_title;
            $blog->blog_url = $request->blog_url;
            $blog->blog_category_id = $request->blog_category_id;
            $blog->blog_description = $request->blog_description;
            $blog->blog_keyword = $request->blog_keyword;
            $blog->blog_tag = $request->blog_tag;

            $blog->blog_body = $request->editor;
            if ($thumbnail != null) {
                $blog->blog_thumbnail = $thumbnail;
            }
            $blog->blog_banner_type = $request->blog_banner_type;
            if ($blog_banner != null) {
                $blog->blog_banner = $blog_banner;
            }
            $blog->blog_status = $request->blog_status;

            if ($blog->blog_status == "Draft" && $request->blog_status == "Publish") {
                $blog->published_date = Carbon::now('Asia/Kolkata')->toDateString();
            }
            $blog->save();
        } else {
            $this->validate($request, [
                'blog_url' => ['required', 'unique:blogs'],
            ]);

            $new_blog = new Blog();
            $new_blog->blog_title = $request->blog_title;
            $new_blog->blog_url = $request->blog_url;
            $new_blog->blog_category_id = $request->blog_category_id;
            $new_blog->blog_description = $request->blog_description;
            $new_blog->blog_keyword = $request->blog_keyword;
            $new_blog->blog_tag = $request->blog_tag;

            $new_blog->blog_body = $request->editor;
            $new_blog->blog_thumbnail = $thumbnail;
            $new_blog->blog_banner_type = $request->blog_banner_type;
            $new_blog->blog_banner = $blog_banner;
            $new_blog->blog_status = $request->blog_status;

            if ($request->blog_status == "Publish") {
                $new_blog->published_date = Carbon::now('Asia/Kolkata')->toDateString();
            }
            $new_blog->save();
        }
        return redirect()->route('admin-blogs.index');
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
        $blog_details = Blog::find($id);
        $blog_categories = BlogCategory::where('category_status', 'Y')->get();

        return view('admin.Pages.blogs.create', ['blog_details' => $blog_details, 'blog_categories' => $blog_categories]);
    }
    public function delete($id)
    {
        Blog::find($id)->delete();
        return redirect()->back();
    }

    public function createCategory()
    {
        return view('admin.Pages.blogs.category-create');
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
        $new_blog_category = new BlogCategory();
        $new_blog_category->category_title = $request->name;
        $new_blog_category->category_description = $request->category_description;
        $new_blog_category->category_body = $request->editor;
        $new_blog_category->category_thumbnail = $category_thumbnail;
        $new_blog_category->category_banner = $category_banner;
        $new_blog_category->seo_title = $request->seo_title;
        $new_blog_category->seo_tag = $request->seo_tag;
        $new_blog_category->seo_keyword = $request->seo_keyword;
        $new_blog_category->category_status = $request->category_status;

        $new_blog_category->created_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        $new_blog_category->updated_at = Carbon::now('Asia/Kolkata')->toDateTimeString();
        $new_blog_category->save();
        return redirect()->route('admin-blogs.index');
    }

    public function showCategory(){
      $blog_categories=BlogCategory::get();
      return view('admin.Pages.blogs.category-index',['blog_categories'=>$blog_categories]);
    }
}
