@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Blogs Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item">  <a href="{{route('admin-blogs.create')}}">Add Blog</a></li>
            <li class="breadcrumb-item"><a href="{{route('admin-blog-categories.create')}}" >Add Blog Category</a></li>
        </ol>
    </div>
    <div class="col-sm-4">
        <div class="title-action">
            {{-- <a href="#"><button class='btn btn-info'> List Users</button></a> --}}
        </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="animated fadeInUp">
        
        <table id="blogs_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Blog Title</th>
                    <th>Blog Url</th>
                    <th>Blog Tags</th>
                    <th>Blog Description</th>
                    <th>Blog Thumbnail</th>
                    <th>Blog Status</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->blog_title}}</td>
                    <td>{{$blog->blog_url}}</td>
                    <td>
                        @foreach (explode(',',$blog->blog_tag) as $item)
                            <span style="text-decoration: underline;">{{$item}}</span>
                        {{-- {{explode(',',$blog->blog_tag)}} --}}
                        @endforeach
                    </td>
                    <td>{{$blog->blog_description}}</td>
                    <td><img src="{{$blog->blog_thumbnail}}" height="150px"></td>
                    <td>{{$blog->blog_status}}</td>
                    <td>{{Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-blogs.delete',$blog->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-blogs.edit',$blog->id)}}" style="color: white;" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Blog Title</th>
                    <th>Blog Url</th>
                    <th>Blog Tags</th>
                    <th>Blog Description</th>
                    <th>Blog Thumbnail</th>
                    <th>Blog Status</th>
                    <th>Created At</th>
                </tr>
            </tfoot>
        </table>
  
    </div>
</div>

    <script>
        $(document).ready(function() {
    $('#blogs_table').DataTable();
} );
    </script>
@endsection