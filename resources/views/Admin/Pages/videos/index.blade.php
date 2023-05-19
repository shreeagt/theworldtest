@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Videos Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="{{ route('admin-videos.create') }}">Add Videos</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin-videos-category.create') }}">Add Video Category</a></li>
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
     
        <table id="videos_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Video Title</th>
                    <th>Video Url</th>
                    <th>Video Tags</th>
                    <th>Video Description</th>
                    <th>Video Thumbnail</th>
                    <th>Video Status</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                    
                <tr>
                    <td>{{$video->id}}</td>
                    <td>{{$video->video_title}}</td>
                    <td>{{$video->video_url}}</td>
                    <td>{{$video->video_tag}}</td>
                    <td>{{$video->video_description}}</td>
                    <td><img src="{{$video->video_thumbnail}}" height="150px"/></td>
                    <td>{{$video->video_status}}</td>
                    <td>{{Carbon\Carbon::parse($video->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-videos.delete',$video->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-videos.edit',$video->id)}}" style="color: white;" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Video Title</th>
                    <th>Video Url</th>
                    <th>Video Tags</th>
                    <th>Video Description</th>
                    <th>Video Thumbnail</th>
                    <th>Video Status</th>
                    <th>Created At</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#videos_table').DataTable();
        } );
    </script>
@endsection