@include('frontend.layout.headertest')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.css"/>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.8.0/slick.min.js"></script>
	<section id="">
		<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<!-- <a href="/venues" class="back_btn"> <img src="/img/icon/back_arrow.png" class="img-fluid" /> </a> -->
						<div class="div">
							<h2> GALLERY </h2> 
							<!-- <p> 03 October, 2021 | 98 Photos </p> -->
						</div>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>
		<main class="gallery_details">
			<div class="container-fluid">
				<div class="row justify-content-md-center"> 
				<div id="image-carousel">
				    @foreach($gallery as $item)
				        <div class="gallery_listing">
				            <div class="card card_border">
				                <a href="#" data-toggle="modal" data-target="#staticBackdrop" data-image="{{ asset('uploads/gallery/' . $item->image) }}">
				                    <img src="{{ asset('uploads/gallery/' . $item->image) }}" class="img-fluid w-100" alt="Gallery Image">
				                </a>
				            </div>
				        </div>
				    @endforeach
				</div>

					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	 
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9418.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>	 
					 <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<a href="#" data-toggle="modal" data-target="#staticBackdrop"> 
								<img src="/img/gallery/9S6A9400.jpg" class="img-fluid w-100" alt=""/>
							</a>
						</div>
					</div>  
				</div>	
			</div>
		</main>
		@include('frontend.layout.partners_logo')
	</section>	
	

@include('frontend.layout.footertest')
<div class="modal fade quick_modal" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header d-block border-0">				
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<img id="modal-image" src="" class="img-fluid w-100" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
#image-carousel {
    display: flex;
    flex-wrap: nowrap;
    overflow-x: auto;
    scroll-snap-type: x mandatory;
    scroll-behavior: smooth;
}

.gallery_listing {
    flex: 0 0 auto;
    width: 25%; /* Adjust the width as per your requirements */
    scroll-snap-align: start;
}

.card_border {
    margin: 10px;
}

.slick-prev,
.slick-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 1;
    width: 40px;
    height: 40px;
    background: #ffffff;
    border: 1px solid #000000;
    border-radius: 50%;
    text-align: center;
    line-height: 40px;
    cursor: pointer;
}

.slick-prev {
    left: -20px;
}

.slick-next {
    right: -20px;
}
	
</style>

<script>
	$(document).ready(function() {
		$('#staticBackdrop').on('show.bs.modal', function(event) {
			var link = $(event.relatedTarget);
			var imageSrc = link.data('image');
			$('#modal-image').attr('src', imageSrc);
		});
	});
</script> 

