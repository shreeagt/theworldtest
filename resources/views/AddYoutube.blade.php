@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2>Add Youtube Videos</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
        </ol>
    </div>
</div>
<form action="{{ route('admin-videos-category.addyoutube') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="videotitle" class="form-label">Video Title</label>
        <input type="text" class="form-control" name="videotitle" placeholder="Video Title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description" required>
    </div>
    <div class="mb-3">
        <label for="video_id" class="form-label">Video ID</label>
        <input type="text" class="form-control" name="video_id" placeholder="Video ID" required>
    </div>
    <div class="mb-3">
        <label for="videourl" class="form-label">Video URL</label>
        <input type="text" class="form-control" name="videourl" placeholder="Video URL" required>
    </div>
    <label for="videothumbnail">Add Video Thumbnail</label>
    <input type="file" name="photo">
    <div class="form-group">
        <input type="radio" name="home_status" value="1" id="">
        <label for="femaleRadio">Home Page Display</label>       
    </div>
    <input type="submit">
</form>
@endsection
