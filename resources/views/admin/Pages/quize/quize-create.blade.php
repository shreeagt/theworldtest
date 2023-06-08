@extends('admin.layouts.app')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-8">
      <h2> Quize Page </h2>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
          <li class="breadcrumb-item">  <a href="{{route('admin-quize.create')}}">Add Quize</a></li>
         
      </ol>
  </div>
  <div class="col-sm-4">
      <div class="title-action">
        
      </div>
  </div>
</div>
<div class="wrapper wrapper-content">
<div class="animated fadeInUp">
<form action="{{route('admin-quize.store')}}" method="POST" enctype="multipart/form-data">
  @csrf
  @if (isset($quize_details))
  
  <input hidden value="{{$quize_details->quize_id}}" name="quize_id"/>
  @endif


    <div class="form-group">
      <label for="exampleInputEmail1">Question</label>
      <input type="text" class="form-control" name="question" required  placeholder="Enter Question" value="{{isset($quize_details)?$quize_details->question:''}}">
    </div>
    

    
      <div class="form-group">
        <label for="exampleInputPassword1">Option1</label>
        <input type="text" class="form-control" name="option1" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->option1:''}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Option2</label>
        <input type="text" class="form-control" name="option2" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->option2:''}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Option3</label>
        <input type="text" class="form-control" name="option3" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->option3:''}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Option4</label>
        <input type="text" class="form-control" name="option4" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->option4:''}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Answer</label>
        <input type="text" class="form-control" name="answer" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->answer:''}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Success Comment</label>
        <input type="text" class="form-control" name="success_comment" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->success_comment:''}}">
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Failure Comment</label>
        <input type="text" class="form-control" name="failure_comment" required  placeholder="Enter Option" value="{{isset($quize_details)?$quize_details->failure_comment:''}}">
      </div>

      <div class="form-group">
        <label for="editor">Status</label>
        <select  name="status" class="form-control" required>
          <option  value="Active">Active</option>
          <option  value="Inactive">Inactive</option>        
        </select>
      </div>

     

    
      {{-- <div class="form-group">
        <label for="editor">Category Active Status</label>
        <select name="category_status" class="form-control" required>
          <option  value="Y">Yes</option>
          <option  value="N">No</option>
        
        </select>
      </div> --}}
    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
</div>

  <link href="{{ url('css/bootstrap-tokenfield.css') }}" rel="stylesheet" />
  <script src="{{ url('js/bootstrap-tokenfield.js') }}"></script>

 
 
@endsection