@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Photos Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="/admin/dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"><a href="{{route('admin-photos-category.create')}}" >Add Photos Category</a></li>
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
                    <th>Category Title</th>
                    {{-- <th>Blog Url</th>
                    <th>Blog Tags</th> --}}
                    <th>Category Description</th>
                    <th>Category Thumbnail</th>
                    <th>Category Status</th>
                    <th>Created At</th>
                    {{-- <th></th>
                    <th></th> --}}
                </tr>
            </thead>
            <tbody>
                @foreach ($photos_categories as $item)
                    
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->category_title}}</td>
                    {{-- <td>{{$blog->category_url}}</td>
                    <td>
                        @foreach (explode(',',$blog->category_tag) as $item)
                            <span style="text-decoration: underline;">{{$item}}</span>
                        {{-- {{explode(',',$blog->blog_tag)}} --}}
                        {{-- @endforeach
                    </td> --}}
                    <td>{{$item->category_description}}</td>
                    <td><img src="{{$item->category_thumbnail}}" height="150px"></td>
                    <td>{{$item->category_status}}</td>
                    <td>{{Carbon\Carbon::parse($item->created_at)->format('M d, Y')}}</td>
                    {{-- <td>
                        <a href="{{route('admin-blogs.delete',$blog->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-blogs.edit',$blog->id)}}" style="color: white;" class="btn btn-success">Edit</a></td> --}}
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Category Title</th>
                    {{-- <th>Blog Url</th>
                    <th>Blog Tags</th> --}}
                    <th>Category Description</th>
                    <th>Category Thumbnail</th>
                    <th>Category Status</th>
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