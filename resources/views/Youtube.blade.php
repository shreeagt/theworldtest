@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Videos Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="/admin/videos/category/insert/youtube">Add Youtube Videos</a></li>
        </ol>
    </div>
</div>
<div class="container-fluid">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">Gallery Thumbnail</h2>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Video Title</th>
                        <th>Description</th>
                        <th>Video Url</th>
                        <th>Video ID</th>
                        <th>Video Thumbnail</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($youtubevideos as $video)
                        <tr>
                            <td>{{ $video->id }}</td>
                            <td>{{ $video->videotitle }}</td>
                            <td>{{ $video->description }}</td>
                            <td>
                                <div class="video-url">{{ $video->videourl }}</div>
                            </td>
                            <td>{{ $video->video_id }}</td>
                            <td>
                                <img src="{{ asset('/youtube/gallery/' . $video->image) }}" alt="Video Thumbnail" width="100">
                            </td>
                            <td><a href="{{ route('admin-videos-category.editVideo', $video->id) }}" class="btn btn-success">Edit</a></td>
                            <td> <form action="{{ route('admin-videos-category.deleteVideo', $video->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

