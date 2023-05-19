@include('frontend.layout.headertest')

<style>
    .in_numbers .eight_bg .card {
    background: white;
    background-size: cover;
    position: relative;
}

div#pills-home {
    padding: 0 10px;
}

h3.text-left.main_up {
    margin-bottom: 0;
}


span.time_upcomming {
    font-size: 25px;
    font-weight: 800;
}

span.text_upcomming {
    font-weight: 800;
    opacity: 0.4;
    display: inline-block;
    margin-left: 5px;
}

span.tl_upcomming {
    font-weight: 800;
}


.flag_cover {
    margin: 10px;
    /* padding: 10px; */
}

img.img-upcomming {
    position: unset!important;
    width: 70px;
	margin-right: 10px;
    transform: none!important;
}

.card.card-upcomming {
    height: auto;
}


</style>
<!-- <link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css"> -->
<section id="">
<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2>Live Score </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>

		<main class="banner">
			<div class="container">
				<div class="row justify-content-md-center">					
					<!-- <div class="col-lg-9 col-md-9">
						<div class="card banner_card">
							<div id="demo" class="carousel slide" data-ride="carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="/img/homeslider/slide_1.jpg" class="img-fluid mx-auto d-block w-100" alt=""/>
										<div class="carousel-caption">
											<h1 class="white"> Tendulkar lifts the inaugural RSWS trophy - India Legends </h1>
											<p class="white mb-0"> 21 Mar, 2021 </p>											
										</div> 
									</div>
									<div class="carousel-item">
										<img src="/img/homeslider/slide_1.jpg" class="img-fluid mx-auto d-block w-100" alt=""/>
										<div class="carousel-caption">
											<h1 class="white"> Tendulkar lifts the inaugural RSWS trophy - India Legends </h1>
											<p class="white mb-0"> 21 Mar, 2021 </p>											
										</div>  
									</div>  
									<div class="carousel-item">
										<img src="/img/homeslider/slide_1.jpg" class="img-fluid mx-auto d-block w-100" alt=""/>
										<div class="carousel-caption">
											<h1 class="white"> Tendulkar lifts the inaugural RSWS trophy - India Legends </h1>
											<p class="white mb-0"> 21 Mar, 2021 </p>											
										</div> 
									</div>  
								</div>
								<div class="carousel-btns">
									<a class="carousel-control-prev" href="#demo" data-slide="prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
									</a>
									<a class="carousel-control-next" href="#demo" data-slide="next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								</div>
							</div>
						</div>
					</div> -->
					<div class="col-lg-12 col-md-12">
						<div class="card stats_board"> 

							<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								<li class="nav-item" role="presentation">
									<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> Live </a>
								</li>
								<li class="nav-item" role="presentation">
									<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> Recent </a>
								</li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
									

                                <div class="playoffs text-center">
										<div class="row">
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
												<p class="mb-0"> 171/5 (49.5 Over) </p>
											</div>
											<div class="col-sm-6 col-xs-6">
												<p class="mb-0 blue"> Qualifier1 </p>
												<p class="mb-0"> 10 OCT 22</p>
											</div>
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
												<p class="mb-0"> 172/5 (50.0 Over)</p>
											</div>
										</div>
										<a href="#" class="btn btn-details"><p class="mb-0"> <b> Details </b> </p></a>
									</div> <!--  -->


								</div>
								<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
									<div class="playoffs text-center">
										<div class="row">
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
											<div class="col-sm-6 col-xs-6">
												<p class="mb-0 blue"> Qualifier1 </p>
												<p class="mb-0"> 10 OCT 22</p>
											</div>
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
										</div>
										<p class="mb-0"> <b> India won by 4 wickets </b> </p>
                                        <a href="#" class="btn btn-details"><p class="mb-0"> <b> Details </b> </p></a>
									</div> <!--  -->
									<div class="playoffs text-center">
										<div class="row">
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
											<div class="col-sm-6 col-xs-6">
												<p class="mb-0 blue"> Qualifier1 </p>
												<p class="mb-0"> 10 OCT 22</p>
											</div>
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
										</div>
                                        <p class="mb-0"> <b> India won by 4 wickets </b> </p>
                                        <a href="#" class="btn btn-details"><p class="mb-0"> <b> Details </b> </p></a>
									</div> <!--  -->
									<div class="playoffs text-center">
										<div class="row">
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
											<div class="col-sm-6 col-xs-6">
												<p class="mb-0 blue"> Qualifier1 </p>
												<p class="mb-0"> 10 OCT 22</p>
											</div>
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
										</div>
                                        <p class="mb-0"> <b> India won by 4 wickets </b> </p>
                                        <a href="#" class="btn btn-details"><p class="mb-0"> <b> Details </b> </p></a>
									</div> <!--  -->
									<div class="playoffs text-center">
										<div class="row">
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
											<div class="col-sm-6 col-xs-6">
												<p class="mb-0 blue"> Qualifier1 </p>
												<p class="mb-0"> 10 OCT 22</p>
											</div>
											<div class="col-sm-3 col-xs-3">
												<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
												<p class="mb-0"> 172/5 </p>
											</div>
										</div>
                                        <p class="mb-0"> <b> India won by 4 wickets </b> </p>
                                        <a href="#" class="btn btn-details"><p class="mb-0"> <b> Details </b> </p></a>
									</div> <!--  -->
								</div>
							</div>
	
						</div>	
					</div>	
				</div>	
			</div>
		</main>


        <main class="match_scores">
			<div class="container-fluid">
				<div class="row justify-content-md-center">
					<div class="col-lg-12">
						<div class="owl-carousel" id="match_scores">
							<div class="item">
								<div class="row" style="margin-bottom:20px;">
									<div class="col-sm-6 col-xs-6"> <p class="mb-0 si-no-txt"> 1st Semi-Final </p> </div>
									<div class="col-sm-6 col-xs-6 text-right"> <p class="mb-0 si-date-txt">17 March, 2021&nbsp;|&nbsp;19:00 </p> </div>
								</div>
								<div class="row stst">
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" /> </div>
									<div class="col-sm-6 col-xs-6">
										<ul>
											<li class="si-team-win"> <p> <span class="si-score">218/3 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
											<li class="si-vs-txt"> <p class="mb-0">vs</p> </li>
											<li class="si-team-lose"> <p> <span class="si-score">206/6 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
										</ul>
									</div>
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" /> </div>
								</div>
								<p class="si-mat-venue text-center"> India Legends beat West Indies Legends by 12 runs </p>
							</div> <!-- Item -->
							<div class="item">
								<div class="row" style="margin-bottom:20px;">
									<div class="col-sm-6 col-xs-6"> <p class="mb-0 si-no-txt"> 2nd Semi-Final </p> </div>
									<div class="col-sm-6 col-xs-6 text-right"> <p class="mb-0 si-date-txt">17 March, 2021&nbsp;|&nbsp;19:00 </p> </div>
								</div>
								<div class="row stst">
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" /> </div>
									<div class="col-sm-6 col-xs-6">
										<ul>
											<li class="si-team-win"> <p> <span class="si-score">218/3 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
											<li class="si-vs-txt"> <p class="mb-0">vs</p> </li>
											<li class="si-team-lose"> <p> <span class="si-score">206/6 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
										</ul>
									</div>
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" /> </div>
								</div>
								<p class="si-mat-venue text-center"> India Legends beat West Indies Legends by 12 runs </p>
							</div> <!-- Item -->
							<div class="item">
								<div class="row" style="margin-bottom:20px;">
									<div class="col-sm-6 col-xs-6"> <p class="mb-0 si-no-txt"> 3rd Semi-Final </p> </div>
									<div class="col-sm-6 col-xs-6 text-right"> <p class="mb-0 si-date-txt">17 March, 2021&nbsp;|&nbsp;19:00 </p> </div>
								</div>
								<div class="row stst">
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" /> </div>
									<div class="col-sm-6 col-xs-6">
										<ul>
											<li class="si-team-win"> <p> <span class="si-score">218/3 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
											<li class="si-vs-txt"> <p class="mb-0">vs</p> </li>
											<li class="si-team-lose"> <p> <span class="si-score">206/6 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
										</ul>
									</div>
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" /> </div>
								</div>
								<p class="si-mat-venue text-center"> India Legends beat West Indies Legends by 12 runs </p>
							</div> <!-- Item -->
							<div class="item">
								<div class="row" style="margin-bottom:20px;">
									<div class="col-sm-6 col-xs-6"> <p class="mb-0 si-no-txt"> 2nd Semi-Final </p> </div>
									<div class="col-sm-6 col-xs-6 text-right"> <p class="mb-0 si-date-txt">17 March, 2021&nbsp;|&nbsp;19:00 </p> </div>
								</div>
								<div class="row stst">
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" /> </div>
									<div class="col-sm-6 col-xs-6">
										<ul>
											<li class="si-team-win"> <p> <span class="si-score">218/3 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
											<li class="si-vs-txt"> <p class="mb-0">vs</p> </li>
											<li class="si-team-lose"> <p> <span class="si-score">206/6 </span> <span class="si-overs">(20.0 Overs)</span> </p> </li>
										</ul>
									</div>
									<div class="col-sm-3 col-xs-3"> <img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" /> </div>
								</div>
								<p class="si-mat-venue text-center"> India Legends beat West Indies Legends by 12 runs </p>
							</div> <!-- Item --> 
						</div>
					</div> <!-- -->
					<!--
					<div class="col-lg-12 text-center"> <br />
						<a href="#" class="btn btn-primary"> View All </a>
					</div>
					-->
				</div> 
			</div> 
		</main>

        <main class="in_numbers">
      <div class="container">
         <div class="row justify-content-md-center text-center">
            <div class="col-lg-8 col-md-8 col-sm-6 eight_bg">
               <div class="card card-upcomming">
                  <h5 class="card-header white bg-dark">FINAL</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-6">
                           <div class="text-left">
                              <h3 class="text-left main_up">Wednesday 07 June</h3>
                              <span class="time_upcomming">15:00</span><span class="text_upcomming">(YOUR TIME)</span>
                           </div>
                           <div class="text-left mt-4">
                              <p class="text-left">The Oval,London</p>
                              <span class="tl_upcomming">10:30</span><span class="text_upcomming">WED 07 JUNE(LOCAL)</span>
                           </div>
                        </div>
                        <div class="col-6 text-left">
                           <div class="flag_cover">
                              <img src="/img/aus.jpg" class="img-upcomming" alt="flag">
                              <span class="co_name time_upcomming">AUSTRALIA</span>
                           </div>
                           <div class="flag_cover">
                              <img src="/img/ind.jpg" class="img-upcomming" alt="flag">
                              <span class="co_name time_upcomming">INDIA</span>
                           </div>
                        </div>
                     </div>
                     <a href="#" class="btn btn-primary bg-dark">READ MORE</a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </main>
</section>

@include('frontend.layout.partners_logo')
@include('frontend.layout.footertest')