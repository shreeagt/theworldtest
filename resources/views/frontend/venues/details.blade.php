@include('frontend.layout.header')


	<section id="">
		<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<a href="/venues" class="back_btn"> <img src="/img/icon/back_arrow.png" class="img-fluid" /> </a>
						<div class="div">
							<h2> Narendra Modi Stadium </h2> 
							<p> Capacity : 54000 </p>
						</div>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>
		<div class="venue_banner"> <img src="/img/venue/narendra_modi_stadium.jpg" class="img-fluid w-100" />  </div>
		<main class="">
			<div class="container">
				<div class="row text-center"> 
					<div class="col-lg-6 col-md-6 col-sm-6">
						<h3 class="orange"> Map </h3>
						<div class="card">
							<img src="/img/venue/staticmap.jpg" class="img-fluid w-100" />
						</div> 
					</div>	<!-- -->
					<div class="col-lg-6 col-md-6 col-sm-6">
						<h3 class="orange"> Seating Plan </h3>
						<div class="card">
							<img src="/img/venue/layout.jpg" class="img-fluid w-100" />
						</div> 
					</div>	<!-- -->
				</div>	
			</div>
		</main>
		
		@include('frontend.layout.partners_logo')
	
	</section>	
	
 @include('frontend.layout.footer')
