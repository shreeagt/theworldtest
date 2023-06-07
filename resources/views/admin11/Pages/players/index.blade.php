@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Players Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="{{ route('admin-players.create') }}">Add Players</a></li>
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
     
        <table id="players_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Player Name</th>
                    <th>Player Key</th>
                    <th>Player Tags</th>
                    <th>Player Keywords</th>
                    <th>Player Image</th>
                    <th>Player Team</th>
                    <th>Player Speaciality</th>
                    <th>Player Position</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($players as $player)
                    
                <tr>
                    <td>{{$player->id}}</td>
                    <td>{{$player->player_name}}</td>
                    <td>{{$player->player_key}}</td>
                    <td>{{$player->player_tag}}</td>
                    <td>{{$player->player_keywords}}</td>
                    <td>{{$player->player_team}}</td>
                    <td>{{$player->player_speciality}}</td>
                    <td>{{$player->player_position}}</td>
                    <td><img src="{{$player->player_image}}" height="150px"/></td>
                    <td>{{Carbon\Carbon::parse($player->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-players.delete',$player->id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td><a href="{{route('admin-players.edit',$player->id)}}" style="color: white;" class="btn btn-success">Edit</a></td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Player Name</th>
                    <th>Player Key</th>
                    <th>Player Tags</th>
                    <th>Player Keywords</th>
                    <th>Player Image</th>
                    <th>Player Team</th>
                    <th>Player Speaciality</th>
                    <th>Player Position</th>
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
            $('#players_table').DataTable();
        } );
    </script>
@endsection