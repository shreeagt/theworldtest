@include('frontend.layout.headertest')
<link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css">
<style>
   @media (max-width:675px){
    .wrapper{
        max-width: 300px;
}
}

.owl-prev {
    position: absolute;
    top: 50%;
    left: 1%;
}

.owl-next {
    position: absolute;
    top: 50%;
    right: 1%;
}

.owl-buttons .owl-prev,
.owl-buttons .owl-next {
  width: 30px;
  height: 30px;
  /* background-color: #000; */
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #f37224;
}

.owl-buttons .owl-prev:before,
.owl-buttons .owl-next:before {
   content: '';
  width: 10px;
  font-size: 15px;
  height: 10px;
  /* background-color: #fff; */
  border-radius: 50%;
  /* Add your arrow icon styles (e.g., background-image, background-position) */
}

.owl-buttons .owl-prev:before {
  /* Add styles for the left arrow icon */
  content: '<';
}

.owl-buttons .owl-next:before {
  /* Add styles for the right arrow icon */
  content: '>';
}


.wrapper header{
  font-size: 22px;
  font-weight: 600;
}
.wrapper .poll-area{
  margin: 20px 0 15px 0;
}
.poll-area label{
  display: block;
  background: #f37224;
  margin-bottom: 10px;
  padding: 8px 15px;
  border: 2px solid #e6e6e6;
  transition: all 0.2s ease;
}

label.opt-1.selected {
    border: 2px solid #FFCD00;
}

label.opt-2.selected {
    border: 2px solid #01638c;
}

label.opt-3.selected {
    border: 2px solid #AA4A44;
}

label.opt-4.selected {
    border: 2px solid #01638c;
}

div#pstyle1::after {
    background: #FFCD00 !important;
}

div#pstyle2::after {
    background: #01638c !important;
}

div#pstyle3::after {
    background:  #AA4A44 !important;
}

div#pstyle4::after {
    background: #01638c !important;
}

label.opt-1.selected .row .circle{
    border-color: #FFCD00 !important;
  }

  label.opt-2.selected .row .circle{
    border-color: #01638c !important;
  }

  label.opt-3.selected .row .circle{
    border-color: #AA4A44 !important;
  }

  label.opt-4.selected .row .circle{
    border-color: #01638c !important;
  }


label.opt-1 .row .circle::after{
    background: #FFCD00 !important;
  }

  label.opt-2 .row .circle::after{
    background: #01638c !important;
}

  label.opt-3 .row .circle::after{
    background: #AA4A44 !important;
  }

  label.opt-4 .row .circle::after{
    background: #01638c !important;
  }

  label .row {
    margin: 10px;
    display: flex;
    pointer-events: none;
    justify-content: space-between;
}
label .row .column{
  display: flex;
  align-items: center;
}
label .row .circle{
  height: 19px;
  width: 19px;
  display: block;
  border: 2px solid #ccc;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
}
label .row .circle::after {
    content: "";
    height: 11px;
    width: 11px;
    border-radius: inherit;
    position: absolute;
    left: 2.5px;
    top: 2.5px;
    display: none;
}
.poll-area label:hover .row .circle::after{
  display: block;
  background: #e6e6e6;
}
label.selected .row .circle::after{
  display: block;
}
label .row span{
  font-size: 16px;
  font-weight: 500;
}
label .row .percent{
  display: none;
}
label .progress{
  height: 7px;
  width: 100%;
  position: relative;
  background: #f0f0f0;
  margin: 8px 0 3px 0;
  border-radius: 30px;
  display: none;
  pointer-events: none;
}
label .progress:after{
  position: absolute;
  content: "";
  height: 100%;
  background: #ccc;
  width: calc(1% * var(--w));
  border-radius: inherit;
  transition: all 0.2s ease;
}
label.selectall .progress,
label.selectall .row .percent{
  display: block;
}
input[type="radio"],
input[type="checkbox"]{
  display: none;
}
</style>
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
               				<li> <b class="desk_text"> TEAM </b> </li>
               				<li> <b class="desk_text"> PLD  </b> </li>
               				<li> <b class="desk_text"> NET RR  </b> </li>
               				<li> <b class="desk_text"> PTS  </b> </li>
               				<li> <b class="desk_text"> FORM </b> </li>
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
               						<p class="mb-0"> 10 OCT 22</p>
               					</div>
               					<div class="col-sm-3 col-xs-3">
               						<img src="https://www.worldseriest20.com/static-assets/images/flags/2026.png" class="img-fluid" />
               						<p class="mb-0"> 172/5 </p>
               					</div>
               				</div>
               				<p class="mb-0"> <b class="desk_text"> Chennai Super Kings won by 4 wickets </b> </p>
               			</div> 
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
               				<p class="mb-0"> <b class="desk_text"> Chennai Super Kings won by 4 wickets </b> </p>
               			</div> 
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
               				<p class="mb-0"> <b class="desk_text"> Chennai Super Kings won by 4 wickets </b> </p>
               			</div> 
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
               				<p class="mb-0"> <b class="desk_text"> Chennai Super Kings won by 4 wickets </b> </p>
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

               <!-- <div class="custom-nav">
                  <div class="custom-prev"><span class="arrow-left"></span></div>
                  <div class="custom-next"><span class="arrow-right"></span></div>
                  </div> -->

            </div>
         </div>
      </div>
   </main>

   <!-- <main class="latest_video">
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
                  
                  </div>
               </div>
            </div>
     
         </div>
      </div>
   </main> -->
   
   <main class="latest_video">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-12 text-left">
               <h3 class="white mb-30"> #WTC21 FINAL - REWIND </h3>
            </div>
            <div class="col-lg-12">
               <div class="video-section">
                  <div class="video-player" >
       

                     <iframe  id="mainVideo" width="100%" height="100%" src="https://www.youtube.com/embed/h6Mv2RHqkpI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" autoplay allowfullscreen></iframe>
                     
                     <!-- <div class="play-button" onclick="playMainVideo()">
                        <img src="/img/icon/play-inline-wtc.png" alt="Play Button" >
                     </div> -->
                  </div>
                  <div class="recommended-videos">
                     <div class="video_header">
                        <h2>The NZ dressing room at the winning moment | WTC21...</h2>
                        <p>23 JUN 2021</p>
                     </div>
                     <div class="video_cover">
                        <div class="video-thumbnail" onclick="changeVideo('RCTKC37k17s')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>The NZ dressing room at the winning moment | WTC21...</p>
                              <p>Wed 23 Jun</p>
                           </div>
                           <!-- <div id="nowPlaying"></div> -->
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('Dy8hv0XrPWM')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>All seven of Kyle Jamieson's WTC21 Final wickets</p>
                              <p>Tue 6 Jul</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('RCTKC37k17s')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('Dy8hv0XrPWM')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('RCTKC37k17s')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('Dy8hv0XrPWM')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('RCTKC37k17s')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail" >
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </main>


   <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/h6Mv2RHqkpI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->


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
               <div class="wrapper">
                            <header>Who can win this match? <br></header>
                            <div class="poll-area">
                            <input type="checkbox" name="poll" id="opt-1">
                            <input type="checkbox" name="poll" id="opt-2">
                            <input type="checkbox" name="poll" id="opt-3">
                            <input type="checkbox" name="poll" id="opt-4">
                            <label for="opt-1" class="opt-1">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">Australia</span>
                                </div>
                                <span class="percent">25%</span>
                                </div>
                                <div class="progress" id="pstyle1" style='--w:25;'></div>
                            </label>
                            <label for="opt-2" class="opt-2">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">India</span>
                                </div>
                                <span class="percent">45%</span>
                                </div>
                                <div class="progress" id="pstyle2" style='--w:45;'></div>
                            </label>
                            <label for="opt-3" class="opt-3">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">Draw</span>
                                </div>
                                <span class="percent">30%</span>
                                </div>
                                <div class="progress" id="pstyle3" style='--w:30;'></div>
                            </label>
       
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

            <div class="row">
                                 <div class="col-md-12">
                                    <div class="card stats_board">
                                       <div class="tab-content" id="pills-tabContent">
                                          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                             <ul class="head_title">
                                                <li> <b class="desk_text"> POS </b><b class="mob_text"> # </b>  </li>
                         
                                                <li> <b class="desk_text"> TEAM </b> <b class="mob_text"> T </b> </li>
                                                <li> <b class="desk_text"> MATCHES </b> <b class="mob_text"> M </b> </li>
                                                <li> <b class="desk_text"> POINTS  </b> <b class="mob_text"> P </b> </li>
                                                <li> <b class="desk_text"> RATING  </b><b class="mob_text"> R </b>  </li>
                                                <div class="clear"></div>
                                             </ul>
                                             <ul class="stats_list">
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">1</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/ind.jpg" class="img-fluid" />  India </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/ind.jpg" class="img-fluid" />  IND</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">25</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">3,031</p>
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
                                                         <p class="ap-team-name desk_text"> <img src="/img/aus.jpg" class="img-fluid" /> Australia </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/aus.jpg" class="img-fluid" />  AUS</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">23</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">2,679</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">116</p>
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
                                                         <p class="ap-team-name desk_text"> <img src="/img/eng.jpg" class="img-fluid" /> <a href="#"> England </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/eng.jpg" class="img-fluid" />  ENG</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">36</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">4,103</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">114</p>
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
                                                         <p class="ap-team-name desk_text"> <img src="/img/sa.jpg" class="img-fluid" /> <a href="#"> South Africa </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/sa.jpg" class="img-fluid" />  SA</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">21</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">2,182</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">104</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">5</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/nz.jpg" class="img-fluid" /> <a href="#"> New Zealand </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/nz.jpg" class="img-fluid" /> <a href="#"> NZ </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">23</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">2,291</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">100</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">6</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/pak.jpg" class="img-fluid" /> <a href="#"> Pakistan </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/pak.jpg" class="img-fluid" /> <a href="#"> PAK </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">22</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">1,902</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">86</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">7</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/srl.jpg" class="img-fluid" /> <a href="#"> Sri Lanka </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/srl.jpg" class="img-fluid" /> <a href="#"> SL</a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">25</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">3,031</p>
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
                                                         <p class="ap-team-name">8</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/wid.jpg" class="img-fluid" /> <a href="#"> West Indies </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/wid.jpg" class="img-fluid" /> <a href="#"> WI </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">25</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">1,906</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">76</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">9</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/bang.jpg" class="img-fluid" /> <a href="#"> Bangladesh </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/bang.jpg" class="img-fluid" /> <a href="#"> BAN </a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">18</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">805</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">99</p>
                                                      </li>
                                                   </ul>
                                                   <div class="clear"></div>
                                                </li>
                                                <!-- -->
                                                <li>
                                                   <ul class="sub_stats head_title">
                                                      <li class="pld">
                                                         <p class="ap-team-name">10</p>
                                                      </li>
                                                      <li>
                                                         <p class="ap-team-name desk_text"> <img src="/img/zim.jpg" class="img-fluid" /> <a href="#"> Zimbabwe </a> </p>
                                                         <p class="ap-team-name mob_text"> <img src="/img/zim.jpg" class="img-fluid" /> <a href="#"> ZIM</a> </p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">25</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">223</p>
                                                      </li>
                                                      <li class="pts">
                                                         <p class="ap-team-name">32</p>
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
   </main>

 

   <main class="in_numbers">
      <div class="container">
         <div class="row justify-content-md-center text-center">
    
            <div class="col-lg-8 col-md-8 col-sm-6 eight_bg">
               <div class="card card-upcomming">
                  <h5 class="card-header white bg-dark">FINAL</h5>
                  <div class="card-body">
                     <div class="row">
                        <div class="col-sm-6 ">
                           <div class="text-left">
                              <h3 class="text-left main_up">Wednesday 07 June</h3>
                              <span class="time_upcomming">15:00</span><span class="text_upcomming">(YOUR TIME)</span>
                           </div>
                           <div class="text-left mt-4">
                              <p class="text-left">The Oval,London</p>
                              <span class="tl_upcomming">10:30</span><span class="text_upcomming">WED 07 JUNE(LOCAL)</span>
                           </div>
                        </div>
                        <div class="col-sm-6 text-left">
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
           pagination: false,
           stopOnHover: true,
            navigation:true,
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
       mainVideo.src = "https://www.youtube.com/embed" + '/' + videoSrc + "?autoplay=1";
       mainVideo.load();
      //  mainVideo.play();

      // const nowPlayingElement = document.getElementById('nowPlaying');
      // nowPlayingElement.textContent = "Now Playing: " + videoSrc;

     }
   
   //     function playMainVideo() {
   //       const mainVideo = document.getElementById('mainVideo');
   //       mainVideo.play();
   //       const playButton = document.querySelector('.play-button');
   //       playButton.style.display = 'none';
   
   // }
   
   
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

<script>
    const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", ()=>{
    for (let j = 0; j < options.length; j++) {
      if(options[j].classList.contains("selected")){
        options[j].classList.remove("selected");
      }
    }

    options[i].classList.add("selected");
    for (let k = 0; k < options.length; k++) {
      options[k].classList.add("selectall");
    }

    let forVal = options[i].getAttribute("for");
    let selectInput = document.querySelector("#"+forVal);
    let getAtt = selectInput.getAttribute("type");
    if(getAtt == "checkbox"){
      selectInput.setAttribute("type", "radio");
    }else if(selectInput.checked == true){
      options[i].classList.remove("selected");
      selectInput.setAttribute("type", "checkbox");
    }

    let array = [];
    for (let l = 0; l < options.length; l++) {
      if(options[l].classList.contains("selected")){
        array.push(l);
      }
    }
    if(array.length == 0){
      for (let m = 0; m < options.length; m++) {
        options[m].removeAttribute("class");
      }
    }
  });
}



document.addEventListener('DOMContentLoaded', function() {
  var prevButton = document.querySelector('.owl-prev');
  var nextButton = document.querySelector('.owl-next');

  // Replace text with arrow icons
  prevButton.innerHTML = '<span class="arrow-left"></span>';
  nextButton.innerHTML = '<span class="arrow-right"></span>';
});



// $(document).ready(function () {
//   var owl = $('.owl-carousel');
//   owl.owlCarousel({
//   });


//   $('.custom-next').click(function () {
//     owl.trigger('next.owl.carousel');
//   });

//   $('.custom-prev').click(function () {
//     owl.trigger('prev.owl.carousel');
//   });
// });
</script>