@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Photos Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="/admin/dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="{{ route('admin-photos.create') }}">Add Photos</a></li>
            {{-- <li class="breadcrumb-item"><a href="{{ route('admin-videos-category.create') }}">Add Video Category</a></li> --}}
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
     
        <table id="photos_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Photo Title</th>
                    <th>Photo Url</th>
                    <th>Photo Tags</th>
                    <th>Photo Description</th>
                    <th>Photo Thumbnail</th>
                    <th>Photo Status</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($photos as $photo)
                    
                <tr>
                    <td>{{$photo->id}}</td>
                    <td>{{$photo->photos_title}}</td>
                    <td>{{$photo->photos_url}}</td>
                    <td>{{$photo->photos_tag}}</td>
                    <td>{{$photo->photos_description}}</td>
                    <td><img src="{{$photo->photos_thumbnail}}" height="150px"/></td>
                    <td>{{$photo->photos_status}}</td>
                    <td>{{Carbon\Carbon::parse($photo->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-photos.delete',$photo->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-photos.edit',$photo->id)}}" style="color: white;" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Photo Title</th>
                    <th>Photo Url</th>
                    <th>Photo Tags</th>
                    <th>Photo Description</th>
                    <th>Photo Thumbnail</th>
                    <th>Photo Status</th>
                    <th>Created At</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#photos_table').DataTable();
        } );
    </script>
@endsection