@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Venues Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="{{ route('admin-venues.create') }}">Add Venues</a></li>
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
     
        <table id="venue_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Venue Name</th>
                    <th>Venue Key</th>
                    <th>Venue Tags</th>
                    <th>Venue Keywords</th>
                    <th>Venue Thumbnail</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($venues as $venue)
                    
                <tr>
                    <td>{{$venue->id}}</td>
                    <td>{{$venue->venue_name}}</td>
                    <td>{{$venue->venue_key}}</td>
                    <td>{{$venue->venue_tag}}</td>
                    <td>{{$venue->venue_keywords}}</td>
                    <td><img src="{{$venue->venue_thumbnail}}" height="150px"/></td>
                    <td>{{Carbon\Carbon::parse($venue->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-venues.delete',$venue->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-venues.edit',$venue->id)}}" style="color: white;" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Venue Name</th>
                    <th>Venue Key</th>
                    <th>Venue Tags</th>
                    <th>Venue Keywords</th>
                    <th>Venue Thumbnail</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

    <script>
        $(document).ready(function() {
            $('#venue_table').DataTable();
        } );
    </script>
@endsection