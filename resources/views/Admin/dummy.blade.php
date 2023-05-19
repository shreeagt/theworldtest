@extends('admin.layouts.app')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-8">
        <h2> Dummy Page </h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"> <a href="dashboard"> Home </a>  </li>
            <li class="breadcrumb-item"> Dummy</li>
        </ol>
    </div>
    <div class="col-sm-4">
        <div class="title-action">
            <a href="#"><button class='btn btn-info'> List Users</button></a>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content">
	<div class="animated fadeInUp">
		<div class="row justify-content-md-center">			
			<div class="col-lg-12">
				<div class="ibox">
					<div class="ibox-title">
						<h5 class="mb-0"> <a href="#" class="btn back_btn" title="Back"> <i class="fa fa-angle-left" aria-hidden="true"></i> </a> Dummy </h5>
						<div class="ibox-tools">
							<a class="collapse-link"> <i class="fa fa-chevron-up"></i> </a>
						</div>
					</div>
					<div class="ibox-content">
						<div class="row justify-content-md-center">			
							<div class="col-lg-7 col-md-8 text-center">
								
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
								  Launch demo modal
								</button>

								<!-- Modal -->
								<div class="modal fade bd-example-modal-lg" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
								  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
									<div class="modal-content">
									  <div class="modal-header">
										<h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										  <span aria-hidden="true">&times;</span>
										</button>
									  </div>
									  <div class="modal-body">
										...
									  </div>
									  <div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Save changes</button>
									  </div>
									</div>
								  </div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@include('admin.layouts.admin_footer')
</div> <!-- page-wrappe -->
@endsection




