@include('frontend.layout.headertest')
<link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css">
<section id="">
   <main class="banner">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 col-md-12">
               <div class="card banner_card">
                  <div id="demo" class="carousel slide" data-ride="carousel">
                     <!--
                        <ul class="carousel-indicators">
                        	<li data-target="#demo" data-slide-to="0" class="active"></li>
                        	<li data-target="#demo" data-slide-to="1"></li>
                        	<li data-target="#demo" data-slide-to="2"></li>
                        </ul>
                        -->
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
            </div>
            <!-- <div class="col-lg-3 col-md-3">
               <div class="card stats_board"> 
               	<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
               		<li class="nav-item" role="presentation">
               			<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> Standings </a>
               		</li>
               		<li class="nav-item" role="presentation">
               			<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"> Playoffs </a>
               		</li>
               	</ul>
               	<div class="tab-content" id="pills-tabContent">
               		<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
               			<ul class="head_title">
               				<li> <b> TEAM </b> </li>
               				<li> <b> PLD  </b> </li>
               				<li> <b> NET RR  </b> </li>
               				<li> <b> PTS  </b> </li>
               				<li> <b> FORM </b> </li>
               				<div class="clear"></div>
               			</ul> 
               			<ul class="stats_list">
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li> 
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li> 
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li>
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li>
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li> 
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li> 
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li>
               				<li>
               					<ul class="sub_stats head_title">
               						<li> <p class="ap-team-name"> <img src="/img/DCroundsmall.png" class="img-fluid" /> <a href="#"> DC </a> </p> </li>
               						<li class="pld"> <p class="ap-team-name">14</p> </li>
               						<li class="netrr"> <p class="ap-team-name">+0.481</p> </li>
               						<li class="pts"> <p class="ap-team-name">20</p> </li>
               						<li class="formm">
               							<p class="ap-wkt-wrp">
               								<span class="ap-red">L</span>
               								<span class="ap-green">W</span>
               								<span class="ap-green">W</span>
               							</p>
               						</li>
               					</ul>
               					<div class="clear"></div>
               				</li> 
               			</ul>
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
               						<p class="mb-0"> 10 OCT 21 </p>
               					</div>
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               				</div>
               				<p class="mb-0"> <b> Chennai Super Kings won by 4 wickets </b> </p>
               			</div> 
               			<div class="playoffs text-center">
               				<div class="row">
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               					<div class="col-sm-6 col-xs-6">
               						<p class="mb-0 blue"> Qualifier1 </p>
               						<p class="mb-0"> 10 OCT 21 </p>
               					</div>
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               				</div>
               				<p class="mb-0"> <b> Chennai Super Kings won by 4 wickets </b> </p>
               			</div> 
               			<div class="playoffs text-center">
               				<div class="row">
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               					<div class="col-sm-6 col-xs-6">
               						<p class="mb-0 blue"> Qualifier1 </p>
               						<p class="mb-0"> 10 OCT 21 </p>
               					</div>
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               				</div>
               				<p class="mb-0"> <b> Chennai Super Kings won by 4 wickets </b> </p>
               			</div> 
               			<div class="playoffs text-center">
               				<div class="row">
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2023.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               					<div class="col-sm-6 col-xs-6">
               						<p class="mb-0 blue"> Qualifier1 </p>
               						<p class="mb-0"> 10 OCT 21 </p>
               					</div>
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               				</div>
               				<p class="mb-0"> <b> Chennai Super Kings won by 4 wickets </b> </p>
               			</div>
               		</div>
               	</div>
               	<ul class="nav nav-pills">
               		<li> <a class="nav-link active" href="#pills-home" > View Full Table </a> </li>
               		<li> <a class="nav-link" href="#pills-profile"> <i class="fa fa-twitter"></i> Tweet </a> </li>
               	</ul>
               </div>	
               </div>	 -->
         </div>
      </div>
   </main>
   <main class="match_scores">
      <div class="container-fluid">
         <div class="row justify-content-md-center align-items-center">
            <div class="col-lg-6">
               <h1 class="text-center">Test Cricket Goes live in</h1>
               <!-- <div class="owl-carousel" id="match_scores">
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
                  </div> 
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
                  </div> 
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
                  </div> 
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
                  </div> 
                  </div> -->
            </div>
            <div class="col-lg-6">
               <div id="countdown">
                  <ul class="text-center">
                     <li><span id="days"></span>days</li>
                     <li><span id="hours"></span>Hours</li>
                     <li><span id="minutes"></span>Minutes</li>
                     <li><span id="seconds"></span>Seconds</li>
                  </ul>
               </div>
            </div>
            <!--
               <div class="col-lg-12 text-center"> <br />
               	<a href="#" class="btn btn-primary"> View All </a>
               </div>
               -->
         </div>
      </div>
   </main>
   <main class="features_interviews">
      <!-- <div class="container"> -->
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 text-left">
               <!-- <h3 class="mb-30"> Features & Interviews  </h3>    -->
               <h3 class="mb-30"> News & Updates  </h3>
            </div>
            <div class="col-lg-12">
               <div class="owl-carousel" id="features_interviews">
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
               </div>
            </div>
         </div>
      </div>
   </main>
   <main class="latest_video">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 text-left">
               <h3 class="white mb-30"> #WTC21 FINAL - REWIND </h3>
            </div>
            <div class="col-lg-12">
               <div class="video-section">
                  <div class="video-player">
                     <video id="mainVideo" controls>
                        <source src="http://media.w3.org/2010/05/sintel/trailer.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                     </video>
                     <div class="play-button" onclick="playMainVideo()">
                        <img src="/img/icon/play-inline-wtc.png" alt="Play Button" >
                     </div>
                  </div>
                  <div class="recommended-videos">
                     <div class="video_header">
                        <h2>The NZ dressing room at the winning moment | WTC21...</h2>
                        <p>23 JUN 2021</p>
                     </div>
                     <div class="video_cover">
                        <div class="video-thumbnail" onclick="changeVideo('videotext.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>The NZ dressing room at the winning moment | WTC21...</p>
                              <p>Wed 23 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>All seven of Kyle Jamieson's WTC21 Final wickets</p>
                              <p>Tue 6 Jul</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                     </div>
                     <!-- Add more recommended videos here -->
                  </div>
               </div>
            </div>
            <!-- --> 
         </div>
      </div>
   </main>
   <main class="latest_news">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-6">
               <h3 class="text-center mb-30"> TRIVIA OF THE DAY</h3>
               <div id="q-cont">
                  <div class="slide" id="slide1">
                     <div class="question">
                        Who is the highest run-scorer in the ICC World Test Championship 2019-2021??
                     </div>
                     <div class="options">
                        <span class="op" for="q1op1">Virat Kohli</span><span class="op op2" for="q1op2">Kane Willaimson</span><br /><span class="op" for="q1op3">Marnus Labuschagne</span><span class="op op2" for="q1op4">Ajinkya Rahane</span>
                     </div>
                  </div>
                  <div class="slide" id="slide4">
                     <div class="re">
                        Submit
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-6">
               <h3 class="text-center mb-30"> POLL OF THE DAY</h3>
               <div id="q-cont">
                  <div class="slide" id="slide1">
                     <div class="question">
                        Who will the leading wicket-taker in the ICC World Test Championship?
                     </div>
                     <div class="options">
                        <span class="po" for="q1op1">Pat Cummins </span><span class="po op2" for="q1op2">Ravichandran Ashwin</span><br /><span class="po" for="q1op3">Mitchell Starc</span><span class="po op2" for="q1op4">Mohammed Siraj</span>
                     </div>
                  </div>
                  <div class="slide" id="slide4">
                     <div class="re">
                        Submit
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
   <main class="">
      <div class="container">
         <div class="row justify-content-md-center">
            <div class="col-lg-12">
               <div class="tab">
                  <div class="tab__list">
                     <div class="tab__item">Men's</div>
                     <div class="tab__item">Women</div>
                     <!-- <div class="tab__item">Women</div> -->
                  </div>
                  <div class="tab__content">
                     <div class="tab__content-item tab">
                        <div class="tab__list">
                           <div class="tab__item">Team Ranking</div>
                           <!-- <div class="tab__item">ODI's</div>
                              <div class="tab__item">TTI's</div> -->
                        </div>
                        <div class="tab__content">
                           <div class="tab__content-item">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h2>TEST</h2>
                                    <div class="card stats_board">
                                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/icon/ind.jpg" alt="flag">
                                                <p>IND</p>
                                             </li>
                                          </a>
                                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/aus.jpg" alt="">  
                                                <p>AUS</p>
                                             </li>
                                          </a>
                                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/eng.jpg" alt=""> 
                                                <p>ENG</p>
                                             </li>
                                          </a>
                                       </ul>
                                       <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                             <ul class="head_title">
                                                <li> <b> POS </b> </li>
                                                <li> <b> TEAM </b> </li>
                                                <li> <b> PTS  </b> </li>
                                                <div class="clear"></div>
                                             </ul>
                                             <ul class="stats_list">
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">1</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/ind.jpg" class="img-fluid" /> <a href="#"> IND </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">121</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">2</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> AUS </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">119</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">3</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> ENG </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">118</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">4</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> SA </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">117</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <h2>ODI's</h2>
                                    <div class="card stats_board">
                                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/icon/ind.jpg" alt="flag">
                                                <p>IND</p>
                                             </li>
                                          </a>
                                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/aus.jpg" alt="">  
                                                <p>AUS</p>
                                             </li>
                                          </a>
                                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/eng.jpg" alt=""> 
                                                <p>ENG</p>
                                             </li>
                                          </a>
                                       </ul>
                                       <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                             <ul class="head_title">
                                                <li> <b> POS </b> </li>
                                                <li> <b> TEAM </b> </li>
                                                <li> <b> PTS  </b> </li>
                                                <div class="clear"></div>
                                             </ul>
                                             <ul class="stats_list">
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">1</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/ind.jpg" class="img-fluid" /> <a href="#"> IND </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">121</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">2</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> AUS </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">119</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">3</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> ENG </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">118</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">4</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> SA </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">117</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-md-4">
                                    <h2>TTI's</h2>
                                    <div class="card stats_board">
                                       <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                          <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/icon/ind.jpg" alt="flag">
                                                <p>IND</p>
                                             </li>
                                          </a>
                                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/aus.jpg" alt="">  
                                                <p>AUS</p>
                                             </li>
                                          </a>
                                          <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                             <li class="nav-item" role="presentation">
                                                <img src="/img/eng.jpg" alt=""> 
                                                <p>ENG</p>
                                             </li>
                                          </a>
                                       </ul>
                                       <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                             <ul class="head_title">
                                                <li> <b> POS </b> </li>
                                                <li> <b> TEAM </b> </li>
                                                <li> <b> PTS  </b> </li>
                                                <div class="clear"></div>
                                             </ul>
                                             <ul class="stats_list">
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">1</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/ind.jpg" class="img-fluid" /> <a href="#"> IND </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">121</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">2</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> AUS </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">119</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">3</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> ENG </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">118</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">4</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> SA </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">117</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab__content-item">
                        <div class="row">
                           <div class="col-md-4">
                              <h2>TEST</h2>
                              <div class="card stats_board">
                                 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/icon/ind.jpg" alt="flag">
                                          <p>IND</p>
                                       </li>
                                    </a>
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/aus.jpg" alt="">  
                                          <p>AUS</p>
                                       </li>
                                    </a>
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/eng.jpg" alt=""> 
                                          <p>ENG</p>
                                       </li>
                                    </a>
                                 </ul>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <ul class="head_title">
                                          <li> <b> POS </b> </li>
                                          <li> <b> TEAM </b> </li>
                                          <li> <b> PTS  </b> </li>
                                          <div class="clear"></div>
                                       </ul>
                                       <ul class="stats_list">
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">1</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/ind.jpg" class="img-fluid" /> <a href="#"> IND </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">121</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">2</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> AUS </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">119</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">3</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> ENG </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">118</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">4</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> SA </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">117</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <h2>ODI's</h2>
                              <div class="card stats_board">
                                 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/icon/ind.jpg" alt="flag">
                                          <p>IND</p>
                                       </li>
                                    </a>
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/aus.jpg" alt="">  
                                          <p>AUS</p>
                                       </li>
                                    </a>
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/eng.jpg" alt=""> 
                                          <p>ENG</p>
                                       </li>
                                    </a>
                                 </ul>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <ul class="head_title">
                                          <li> <b> POS </b> </li>
                                          <li> <b> TEAM </b> </li>
                                          <li> <b> PTS  </b> </li>
                                          <div class="clear"></div>
                                       </ul>
                                       <ul class="stats_list">
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">1</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/ind.jpg" class="img-fluid" /> <a href="#"> IND </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">121</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">2</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> AUS </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">119</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">3</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> ENG </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">118</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">4</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> SA </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">117</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <h2>TTI's</h2>
                              <div class="card stats_board">
                                 <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/icon/ind.jpg" alt="flag">
                                          <p>IND</p>
                                       </li>
                                    </a>
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/aus.jpg" alt="">  
                                          <p>AUS</p>
                                       </li>
                                    </a>
                                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                                       <li class="nav-item" role="presentation">
                                          <img src="/img/eng.jpg" alt=""> 
                                          <p>ENG</p>
                                       </li>
                                    </a>
                                 </ul>
                                 <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                       <ul class="head_title">
                                          <li> <b> POS </b> </li>
                                          <li> <b> TEAM </b> </li>
                                          <li> <b> PTS  </b> </li>
                                          <div class="clear"></div>
                                       </ul>
                                       <ul class="stats_list">
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">1</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/ind.jpg" class="img-fluid" /> <a href="#"> IND </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">121</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">2</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> AUS </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">119</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">3</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> ENG </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">118</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                          <li>
                                             <ul class="sub_stats head_title">
                                                <li class="pld">
                                                   <p class="ap-team-name">4</p>
                                                </li>
                                                <li>
                                                   <p class="ap-team-name"> <img src="/img/aus.jpg" class="img-fluid" /> <a href="#"> SA </a> </p>
                                                </li>
                                                <li class="pts">
                                                   <p class="ap-team-name">117</p>
                                                </li>
                                             </ul>
                                             <div class="clear"></div>
                                          </li>
                                          <!-- -->
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="tab__content-item tab">
                        <div class="tab__list">
                           <div class="tab__item">Market</div>
                           <div class="tab__item">Value</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </main>
   <!-- <main class="">
      <div class="container">
      	<div class="row justify-content-md-center">
      		<div class="col-lg-12">
      
      		<div class="container" style="padding-top: 100px; padding-bottom: 100px">
      
      <div class="row">
      
      <div class="">
      <div class="table-card">
       <div class="header">
      <span class="title">Erros HTTP</span>
      <div class="actions">
        <a href="#"><i class="fa fa-cog"></i></a>
        <a href="#"><i class="fa fa-cog"></i></a>
        <a href="#"><i class="fa fa-cog"></i></a>
        <a href="#"><i class="fa fa-cog"></i></a>
      </div>
       </div>
       <div class="table">
      <table class="bordered">
      
      
        <tbody>
      	<tr>
      	  <td>1</td>
      	  <td><span><img src="img/icon/ind.jpg"  alt=""></span>India</td>
      	  <td>121</td>
      
      	</tr>
      
      	<tr>
      	<td>2</td>
      	  <td><span><img src="img/icon/aus-flag.png"  alt=""></span>Austrialia</td>
      	  <td>121</td>
      	</tr>
      
      	<tr>
      	<td>3</td>
      	  <td>India</td>
      	  <td>121</td>
      	</tr>
      
      	<tr>
      	<td>4</td>
      	  <td>India</td>
      	  <td>121</td>
      	</tr>
      
      
      
      
      
        </tbody>
      </table>
       </div>
      
       <div class="footer">
      View Full Ranking
       </div>
      
      </div>
      </div>
      </div>
      
      </div>
      
      		</div> 
      	</div> 
      </div> 
      </main> -->
   <!-- <main class="latest_news">
      <div class="container-fluid">
      	<div class="row justify-content-md-center">
      		<div class="col-lg-12">
      			<h3 class="text-center mb-30"> FINAL</h3>   
      
      			<div class="card">
           <div class="card_title">
             <h1>Upcoming Match</h1>
             <p id="match_type">T20 1 of 60</p>
           </div>
           <div class="match_info">
             <div class="team_name">
               <div class="team1">
                 <img
                   src="https://ssl.gstatic.com/onebox/media/sports/logos/JTre94vh6WJeLmIL-Dfc1g_96x96.png"
                   alt=""
                 />
                 <h3>MI</h3>
               </div>
               <div class="team2">
                 <img
                   src="https://ssl.gstatic.com/onebox/media/sports/logos/MxXIt0k-eorEn6yOhD-KBA_96x96.png"
                   alt=""
                 />
                 <h3>RCB</h3>
               </div>
             </div>
      
      
             <div class="date_time">
               <p>9, April 2021</p>
               <p>7.00 PM</p>
             </div>
           </div>
           <div class="seeDetails">
             <a href=""
               >See All
               <span><i class="fa fa-caret-down" aria-hidden="true"></i> </span
             ></a>
           </div>
         </div>
      		</div>
      
      
      </div> 
      </div> 
      </main> -->
   <main class="in_numbers">
      <div class="container">
         <div class="row justify-content-md-center text-center">
            <!-- <div class="col-lg-12 text-left">
               <h3 class="white mb-30"> FINAL </h3>   
               </div> -->
            <!-- <div class="col-lg-6 col-md-6 col-sm-12">
               <div id="numbers" class="carousel slide" data-ride="carousel">
               	<ul class="carousel-indicators">
               		<li data-target="#numbers" data-slide-to="0" class="active"></li>
               		<li data-target="#numbers" data-slide-to="1"></li>
               		<li data-target="#numbers" data-slide-to="2"></li>
               	</ul>
               	<div class="carousel-inner">
               		<div class="carousel-item active"> <img src="/img/2010.png" class="img-fluid w-100" alt=""/> </div>
               		<div class="carousel-item"> <img src="/img/2014.png" class="img-fluid w-100" alt=""/> </div>
               		<div class="carousel-item"> <img src="/img/2019.png" class="img-fluid w-100" alt=""/> </div>
               	</div>
               </div>
               </div> -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 blue">
               <div class="card">
               	<h1> 89 <small> Fifties </small> </h1>
               </div>
               </div>  -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 two_bg">
               <div class="card">
               	<h1> 156 <small> Most Dot Balls Avesh Khan </small> </h1>
               </div>
               </div>  -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 three_bg">
               <div class="card">
               	<div class="row">
               		<div class="col-sm-6 col-xs-6"> <img src="/img/5443.png" class="img-fluid w-100" alt=""/> </div>
               		<div class="col-sm-6 col-xs-6 pdl-0">
               			<h4> Ruturaj Gaikwad </h4>
               			<p> Total Runs <b> 635 runs </b>
               				Strike Rate <b> 136.26 </b>
               				Matches Played <b> 16 </b> 
               			</p>
               		</div>
               	</div>
               </div>
               </div>  -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 four_bg">
               <div class="card">
               	<div class="row">
               		<div class="col-sm-6 col-xs-6"> <img src="/img/157.png" class="img-fluid w-100" alt=""/> </div>
               		<div class="col-sm-6 col-xs-6 pdl-0">
               			<h4 class="white"> Harshal Patel </h4>
               			<p class="white"> Total Wickets <b> 32 wickets </b>
               				Average <b> 10.56 </b>
               				Matches Played <b> 15 </b> 
               			</p>
               		</div>
               	</div>
               </div>
               </div>  -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 five_bg">
               <div class="card">
               	<h1> 1548 <small> Four </small> </h1>
               </div>
               </div>  -->
            <!-- <div class="col-lg-3 col-md-3 col-sm-6 six_bg">
               <div class="card">
               	<h1> 687 <small> Sixes </small> </h1>
               </div>
               </div> -->
            <!-- <div class="col-lg-2 col-md-2 col-sm-6 seven_bg">
               <div class="card"> <img src="/img/pic.png" class="img-fluid d-block mx-auto" alt=""/> </div> 
               </div>  -->
            <!-- <div class="col-lg-8 col-md-8 col-sm-6 eight_bg">
               <div class="card">
               	<h1> Interesting Facts <span> " Chennai Super Kings holds the record for most Fair Play awards won in IPL history. " </span> </h1>
               </div> 
               </div>  -->
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
            <!-- <div class="col-lg-2 col-md-2 col-sm-6 nine_bg">
               <div class="card"> <img src="/img/highlight.png" class="img-fluid d-block mx-auto" alt=""/> </div> 
               </div>  -->
         </div>
      </div>
   </main>
   <main class="latest_video" style="background:none;">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 text-left">
               <h3 class="mb-30"> Recent Post  </h3>
            </div>
            <div class="col-lg-12">
               <div class="owl-carousel" id="top_highlights">
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
                  <div class="item">
                     <div class="ap-slide-content relative">
                        <div class="ap-img-box relative">
                           <img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/bcci/articles/1642825007_IPL-2022.jpg" class="img-fluid" />
                        </div>
                        <div class="ap-img-content">
                           <div class="ap-date-wrp"> <span> 22 Jan, 2022 </span> <span class="ap-green-text"></span> </div>
                           <h5 class="ap-slide-title"> 1,214 players register for IPL 2022 Player Auction </h5>
                        </div>
                     </div>
                  </div>
                  <!-- Item -->
               </div>
               <!-- -->
            </div>
            <!-- --> 
         </div>
      </div>
   </main>
   <!-- <main class="in_numbers">
      <div class="container">
      	<div class="row justify-content-md-center text-center">
      		<div class="col-lg-12 text-left">
      			<h3 class="white mb-30"> 2021 In Numbers  </h3>   
      		</div>
      		<div class="col-lg-6 col-md-6 col-sm-12">
      			<div id="numbers" class="carousel slide" data-ride="carousel">
      				<ul class="carousel-indicators">
      					<li data-target="#numbers" data-slide-to="0" class="active"></li>
      					<li data-target="#numbers" data-slide-to="1"></li>
      					<li data-target="#numbers" data-slide-to="2"></li>
      				</ul>
      				<div class="carousel-inner">
      					<div class="carousel-item active"> <img src="/img/2010.png" class="img-fluid w-100" alt=""/> </div>
      					<div class="carousel-item"> <img src="/img/2014.png" class="img-fluid w-100" alt=""/> </div>
      					<div class="carousel-item"> <img src="/img/2019.png" class="img-fluid w-100" alt=""/> </div>
      				</div>
      			</div>
      		</div>
      		<div class="col-lg-3 col-md-3 col-sm-6 blue">
      			<div class="card">
      				<h1> 89 <small> Fifties </small> </h1>
      			</div>
      		</div> 
      		<div class="col-lg-3 col-md-3 col-sm-6 two_bg">
      			<div class="card">
      				<h1> 156 <small> Most Dot Balls Avesh Khan </small> </h1>
      			</div>
      		</div> 
      		<div class="col-lg-3 col-md-3 col-sm-6 three_bg">
      			<div class="card">
      				<div class="row">
      					<div class="col-sm-6 col-xs-6"> <img src="/img/5443.png" class="img-fluid w-100" alt=""/> </div>
      					<div class="col-sm-6 col-xs-6 pdl-0">
      						<h4> Ruturaj Gaikwad </h4>
      						<p> Total Runs <b> 635 runs </b>
      							Strike Rate <b> 136.26 </b>
      							Matches Played <b> 16 </b> 
      						</p>
      					</div>
      				</div>
      			</div>
      		</div> 
      		<div class="col-lg-3 col-md-3 col-sm-6 four_bg">
      			<div class="card">
      				<div class="row">
      					<div class="col-sm-6 col-xs-6"> <img src="/img/157.png" class="img-fluid w-100" alt=""/> </div>
      					<div class="col-sm-6 col-xs-6 pdl-0">
      						<h4 class="white"> Harshal Patel </h4>
      						<p class="white"> Total Wickets <b> 32 wickets </b>
      							Average <b> 10.56 </b>
      							Matches Played <b> 15 </b> 
      						</p>
      					</div>
      				</div>
      			</div>
      		</div> 
      		<div class="col-lg-3 col-md-3 col-sm-6 five_bg">
      			<div class="card">
      				<h1> 1548 <small> Four </small> </h1>
      			</div>
      		</div> 
      		<div class="col-lg-3 col-md-3 col-sm-6 six_bg">
      			<div class="card">
      				<h1> 687 <small> Sixes </small> </h1>
      			</div>
      		</div>
      		<div class="col-lg-2 col-md-2 col-sm-6 seven_bg">
      			<div class="card"> <img src="/img/pic.png" class="img-fluid d-block mx-auto" alt=""/> </div> 
      		</div> 
      		<div class="col-lg-8 col-md-8 col-sm-6 eight_bg">
      			<div class="card">
      				<h1> Interesting Facts <span> " Chennai Super Kings holds the record for most Fair Play awards won in IPL history. " </span> </h1>
      			</div> 
      		</div> 
      		<div class="col-lg-2 col-md-2 col-sm-6 nine_bg">
      			<div class="card"> <img src="/img/highlight.png" class="img-fluid d-block mx-auto" alt=""/> </div> 
      		</div> 
      	</div> 
      </div> 
      </main> -->
   <!-- <main class="latest_news">
      <div class="container">
      	<div class="row justify-content-md-center">
      		<div class="col-lg-12 text-left">
      			<h3 class="mb-30"> 2021 Leaders  </h3>   
      		</div>
      		<div class="col-lg-12">
      			<div class="owl-carousel text-center leaders" id="2021_leaders">
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative one_bg">
      							<div class="corner-logo"><img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/ipl/CSK/logos/Roundbig/CSKroundbig.png"></div>
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div> 
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative two_bg">
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div> 
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative three_bg">
      							<div class="corner-logo"><img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/ipl/CSK/logos/Roundbig/CSKroundbig.png"></div>
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div> 
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative four_bg">
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div> 
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative five_bg">
      							<div class="corner-logo"><img src="https://bcciplayerimages.s3.ap-south-1.amazonaws.com/ipl/CSK/logos/Roundbig/CSKroundbig.png"></div>
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div>
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative six_bg">
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div>
      				<div class="item">
      					<div class="ap-slide-content relative">
      						<div class="ap-img-box relative seven_bg">
      							<h4> Blue Cap </h4>
      							<img src="/img/team/1.png" class="img-fluid d-block mx-auto" />
      						</div>
      						<div class="ap-img-content">
      							<h5> Manpreet <b> Gony </b> </h5>
      							<h1> 635 <small>RUNS</small> </h1>
      							<a href="#"> VIEW FULL LIST </a>
      						</div>
      					</div>
      				</div> 
      			</div>  
      		</div> 
      	</div> 
      </div> 
      </main> -->
</section>
@include('frontend.layout.footertest')
<script>
   $(document).ready(function () {
       var owl = $("#match_scores");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 3,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#features_interviews");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#latest_video");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#latest_news");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#top_highlights");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 4,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 3],
           itemsDesktopSmall: [979, 2],
           itemsTablet: [600, 2], //3 items between 600 and 0
           itemsMobile: [480, 1], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   $(document).ready(function () {
       var owl = $("#2021_leaders");
       owl.owlCarousel({
           autoPlay: 3000,
           items: 6,
           pagination: true,
           stopOnHover: true,
           navigation: false,
           itemsDesktop: [1280, 7],
           itemsDesktopSmall: [979, 3],
           itemsTablet: [600, 3], //3 items between 600 and 0
           itemsMobile: [480, 2], // itemsMobile disabled - inherit from itemsTablet option			
       });
       // Custom Navigation Events
       $(".next").click(function () {
           owl.trigger('owl.next');
       })
       $(".prev").click(function () {
           owl.trigger('owl.prev');
       })
   });
</script>
<script>
   (function () {
    const second = 1000,
          minute = second * 60,
          hour = minute * 60,
          day = hour * 24;
   
    //I'm adding this section so I don't have to keep updating this pen every year :-)
    //remove this if you don't need it
    let today = new Date(),
        dd = String(today.getDate()).padStart(2, "0"),
        mm = String(today.getMonth() + 1).padStart(2, "0"),
        yyyy = today.getFullYear(),
        nextYear = yyyy + 1,
        dayMonth = "06/12/",
        birthday = dayMonth + yyyy;
    
    today = mm + "/" + dd + "/" + yyyy;
    if (today > birthday) {
      birthday = dayMonth + nextYear;
    }
    //end
    
    const countDown = new Date(birthday).getTime(),
        x = setInterval(function() {    
   
          const now = new Date().getTime(),
                distance = countDown - now;
   
          document.getElementById("days").innerText = Math.floor(distance / (day)),
            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
   
          //do something later when date is reached
          if (distance < 0) {
            document.getElementById("headline").innerText = "The final day";
            document.getElementById("countdown").style.display = "none";
            document.getElementById("content").style.display = "block";
            clearInterval(x);
          }
          //seconds
        }, 0)
    }());
</script>
<!-- <script>
   function changeVideo(videoSrc) {
   const mainVideo = document.getElementById('mainVideo');
   mainVideo.src = videoSrc;
   mainVideo.load();
   }
   </script> -->
<script>
   function changeVideo(videoSrc) {
       const mainVideo = document.getElementById('mainVideo');
       mainVideo.src = "{{ asset('video') }}" + '/' + videoSrc;
       mainVideo.load();
     }
   
       function playMainVideo() {
         const mainVideo = document.getElementById('mainVideo');
         mainVideo.play();
         const playButton = document.querySelector('.play-button');
         playButton.style.display = 'none';
   
   }
   
   
   $(window).ready(function(){
   	var left, width, cont = "#q-cont";
   	$('.op').click(function(){
   		$('.op').css("background","#f37224");
   		$(this).css("background","#192462");
   		// next();
   	});
   });
   
   $(window).ready(function(){
   	var left, width, cont = "#q-cont";
   	$('.po').click(function(){
   		$('.po').css("background","#f37224");
   		$(this).css("background","#192462");
   		// next();
   	});
   });
     
</script>
<script>
   const tabs = document.querySelectorAll(".tab");
   
   function tabify(tab) {
   const tabList = tab.querySelector(".tab__list");
   
   if (tabList) {
   const tabItems = [...tabList.children];
   const tabContent = tab.querySelector(".tab__content");
   const tabContentItems = [...tabContent.children];
   let tabIndex = 0;
   
   tabIndex = tabItems.findIndex((item, index) => {
   return [...item.classList].indexOf("is--active") > -1;
   });
   
   tabIndex > -1 ? (tabIndex = tabIndex) : (tabIndex = 0);
   
   function setTab(index) {
   tabItems.forEach((x, index) => x.classList.remove("is--active"));
   tabContentItems.forEach((x, index) => x.classList.remove("is--active"));
   
   tabItems[index].classList.add("is--active");
   tabContentItems[index].classList.add("is--active");
   }
   
   tabItems.forEach((x, index) =>
   x.addEventListener("click", () => setTab(index))
   );
   setTab(tabIndex);
   tab.querySelectorAll(".tab").forEach((tabContent) => tabify(tabContent));
   }
   }
   
   tabs.forEach(tabify);
</script>