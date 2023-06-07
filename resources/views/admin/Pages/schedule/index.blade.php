@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Schedules Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> <a href="{{ route('admin-schedule.create') }}">Add Schedule</a></li>
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
     
        <table id="schedule_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Match Date</th>
                    <th>Match Time (IST)</th>
                    <th>Match Venue</th>
                    <th>Team 1</th>
                    <th>Team 2</th>
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schedules as $schedule)
                    
                <tr>
                    <td>{{$schedule->id}}</td>
                    <td>{{date('d/m/Y',strtotime($schedule->match_date))}}</td>
                    <td>{{$schedule->match_time}}</td>
                    <td>{{$schedule->match_venue}}</td>
                    <td>{{$schedule->team_1}}</td>
                    <td>{{$schedule->team_2}}</td>
                    <td>{{$schedule->created_at}}</td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Match Date</th>
                    <th>Match Time (IST)</th>
                    <th>Match Venue</th>
                    <th>Team 1</th>
                    <th>Team 2</th>
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
            $('#schedule_table').DataTable();
        } );
    </script>
@endsection