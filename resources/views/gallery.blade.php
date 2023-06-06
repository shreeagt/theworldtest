@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-8">
      <h2>Photos Page</h2>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
          <li class="breadcrumb-item"><a href="/admin/photos/category/gallery/create">Add Gallery Thumbnail</a></li>
     </ol>
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
                        <th>Gallery Title</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gallery as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->gallerytitle }}</td>
                            <td>
                                <img src="{{ asset('uploads/gallery/' . $item->image) }}" alt="Gallery Image" width="100">
                            </td>
                            <td><a href="{{ route('admin-photos-category-gallery.edit', $item->id) }}" class="btn btn-success">Edit</a></td>
                            <td> <form id="delete-form-{{ $item->id }}" action="{{ route('admin-photos-category-gallery.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">Delete</button>
                            </form></td>                      
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
