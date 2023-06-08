@extends('admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="card-header py-3">
        <h2 class="m-0 font-weight-bold text-primary">Edit Video Details</h2>
    </div>
    <div class="card-body">
        <form action="{{ route('admin-videos-category.updateVideo', $video->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="videotitle">Video Title</label>
                <input type="text" name="videotitle" class="form-control" value="{{ $video->videotitle }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ $video->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="videourl">Video URL</label>
                <input type="text" name="videourl" class="form-control" value="{{ $video->videourl }}">
            </div>
            <div class="form-group">
                <label for="video_id">Video ID</label>
                <input type="text" name="video_id" class="form-control" value="{{ $video->video_id }}">
            </div>
            <div class="form-group">
                <label for="photo">Video Thumbnail</label>
                <input type="file" name="photo" class="form-control-file">
                <img src="{{ asset('/youtube/gallery/' . $video->image) }}" alt="Video Thumbnail" width="100">
            </div>
            <div class="form-group">
                <input type="radio" name="home_status" value="1" <?php if ($video->home_status === 1) echo 'checked'; ?>>
                <label for="femaleRadio">Home Page Display</label>
               
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection