@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Teams Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="{{ route('admin-teams.create') }}">Add Teams</a></li>
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
     
        <table id="teams_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Team Name</th>
                    <th>Team Key</th>
                    <th>Team Tags</th>
                    <th>Team Keywords</th>
                    <th>Team Logo</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teams as $team)
                    
                <tr>
                    <td>{{$team->id}}</td>
                    <td>{{$team->team_name}}</td>
                    <td>{{$team->team_key}}</td>
                    <td>{{$team->team_tag}}</td>
                    <td>{{$team->team_keywords}}</td>
                    <td><img src="{{$team->team_logo}}" height="150px"/></td>
                    <td>{{Carbon\Carbon::parse($team->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-teams.delete',$team->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-teams.edit',$team->id)}}" style="color: white;" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Team Name</th>
                    <th>Team Key</th>
                    <th>Team Tags</th>
                    <th>Team Keywords</th>
                    <th>Team Logo</th>
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
            $('#teams_table').DataTable();
        } );
    </script>
@endsection