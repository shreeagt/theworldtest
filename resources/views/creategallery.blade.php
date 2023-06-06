@extends('admin.layouts.app')
@section('content')
<h1>Upload Gallery Thumbnail</h1>
    <form action="{{ route('admin-photos-category-gallery.insert') }}" method="POST" enctype="multipart/form-data">
        @csrf  
        <div class="mb-3">
            <label for="gallerytitle" class="form-label">Gallery Title</label>
            <input type="text" class="form-control" name="gallerytitle" placeholder="gallerytitle" required>
        </div>
        <label for="Add_Gallery_Thumbnail">Add Gallery Thumbnail</label>
        <input type="file" name="photo">
        <input type="submit">
    </form>
@endsection