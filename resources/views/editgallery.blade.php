@extends('admin.layouts.app')
@section('content')
<form action="{{ route('admin-photos-category-gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Add fields you want to edit here -->

    <div class="form-group">
        <label for="gallerytitle">Gallery Title</label>
        <input type="text" name="gallerytitle" id="gallerytitle" value="{{ $gallery->gallerytitle }}">
    </div>

    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="image" id="image">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection