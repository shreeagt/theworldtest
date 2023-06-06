@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Blogs Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"><a href="{{route('admin-quize.create')}}" >Add Quize</a></li>
        </ol>
    </div>
    <div class="col-sm-4">
        <div class="title-action">
           
        </div>
    </div>
</div>
<div class="wrapper wrapper-content">
	<div class="animated fadeInUp">
        
        <table id="blogs_table" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Option1</th>
                    <th>Option2</th>
                    <th>Option3</th>
                    <th>Option4</th>                    
                    <th>Created At</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($quize as $list)
                    
                <tr>
                    
                    <td>{{$list->quize_id}}</td>
                    <td>{{$list->question}}</td>
                    <td>{{$list->option1}}</td>                   
                    <td>{{$list->option2}}</td>
                    <td>{{$list->option3}}</td>
                    <td>{{$list->option4}}</td>                   
                    <td>{{Carbon\Carbon::parse($list->created_at)->format('M d, Y')}}</td>
                    <td>
                        <a href="{{route('admin-quize.delete',$list->quize_id)}}" style="color: white;" class="btn btn-danger">Delete</a>
                        
                    </td>
                    <td>
                        <a href="{{route('admin-quize.edit',$list->quize_id)}}" style="color: white;" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Question</th>
                    <th>Option1</th>
                    <th>Option2</th>
                    <th>Option3</th>
                    <th>Option4</th>                    
                    <th>Created At</th>
            
                </tr>
            </tfoot>
        </table>
  
    </div>
</div>

    <script>
        $(document).ready(function() {
    $('#blogs_table').DataTable();
} );
    </script>
@endsection