@include('frontend.layout.headertest')

<style>
	button.tablinks.btmain {
    background: #343a40;
    color: #fff;
}
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #dfe8eb;
  width: 20%;
  /* height: 400px; */
  border-radius: 10px 0 0 10px;
}

button.tablinks.btmain {
    background: #343a40;
    color: #fff;
}

.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 11px 14px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    transition: 0.3s;
    font-size: 17px;
    margin: 0%;
    border-radius: 0;
}

.tab button:hover {
  background-color: #bee9f7;
}

button.tablinks.btmain:hover{
	background: #343a40;
    color: #fff;
}

.tab button.active {
  background-color: #6398a8;
}

.tabcontent {
  float: left;
  /* padding: 0px 12px; */
  padding: 0px;
  border: 1px solid #ccc;
  width: 80%;
  border-left: none;
  /* height: 400px; */
  border-radius: 0 10px 10px 0;
}
</style>

	<section id="">



	<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2>Stats </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>

    
		<!-- <main class="banner">
			<div class="container">
				<div class="row justify-content-md-center">					
					<div class="col-lg-9 col-md-9">
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
					</div>
					<div class="col-lg-3 col-md-3">
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
												<p class="mb-0"> 10 OCT 22</p>
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
												<p class="mb-0"> 10 OCT 22</p>
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
												<p class="mb-0"> 10 OCT 22</p>
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
												<p class="mb-0"> 10 OCT 22</p>
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
					</div>	
				</div>	
			</div>
		</main> -->

		
		<main class="latest_news">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-lg-12 text-left">
					<div class="tab">
					        <button class="tablinks btmain"> Batting </button>
							<button class="tablinks" onclick="openTab(event, 'firstTab')" id="defaultOpen"> Most Runs </button>
							<button class="tablinks" onclick="openTab(event, 'secondTab')"> Highest Scores </button>
							<button class="tablinks" onclick="openTab(event, 'thirdTab')"> Best Batting Average </button>
							<button class="tablinks" onclick="openTab(event, 'hundred')">  Most Hundreds  </button>
							<button class="tablinks" onclick="openTab(event, 'fifties')">  Most Fifties </button>

					        <button class="tablinks btmain"> Bowling </button>
							<button class="tablinks" onclick="openTab(event, 'wickets')" >  Most Wickets </button>
							<button class="tablinks" onclick="openTab(event, 'bowl')">  Best Bowling Average  </button>
							<button class="tablinks" onclick="openTab(event, 'best_bowling')">  Best Bowling  </button>
							<button class="tablinks" onclick="openTab(event, 'haul')">   Most 5 Wickets Haul   </button>
							<button class="tablinks" onclick="openTab(event, 'b_economy')"> Best Economy  </button>
			
							</div>

							<div id="firstTab" class="tabcontent">
					

							<div class="container table-responsive py-2"> 
							<table class="table table-bordered table-hover">
							<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Player</th>
								<th scope="col">Matches</th>
								<th scope="col">Inns</th>
								<th scope="col">Runs</th>
								<th scope="col">Avg</th>
								<th scope="col">Sr</th>
								<th scope="col">4s</th>
								<th scope="col">6s</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<th scope="row">1</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">2</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">3</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">4</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">5</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>


								<tr>
								<th scope="row">6</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">7</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">8</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">9</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>
								<tr>
								<th scope="row">10</th>
								<td>Faf du Plessis</td>
								<td>13</td>
								<td>13</td>
								<td>702</td>
								<td>58.50</td>
								<td>153.95</td>
								<td>55</td>
								<td>36</td>
								</tr>

							</tbody>
							</table>
							</div>

						
							</div>

							<div id="secondTab" class="tabcontent">
							<!-- <h3>Second tab title</h3> -->
						
							<div class="container table-responsive py-2"> 
							<table class="table table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
								<th scope="col">#</th>
								<th scope="col">Batter</th>
								<th scope="col">Runs</th>
								<th scope="col">Balls</th>
								<th scope="col">Sr</th>
								<th scope="col">Vs</th>
								<th scope="col">4s</th>
								<th scope="col">6s</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">7</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">8</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">9</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>
								<tr>
									<th scope="row">10</th>
									<td>Yashasvi Jaiswal</td>
									<td>124</td>
									<td>62</td>
									<td>200</td>
									<td>Mumbai Indians</td>
									<td>16</td>
									<td>8</td>
								</tr>



							</tbody>
							</table>
							</div>

							</div>

							<div id="thirdTab" class="tabcontent">
							<!-- <h3>Third tab title</h3> -->
							
							<div class="container table-responsive py-2"> 
							<table class="table table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
								<th scope="col">#</th>
								<th scope="col">Batter</th>
								<th scope="col">Matches</th>
								<th scope="col">Inns</th>
								<th scope="col">Runs</th>
								<th scope="col">Avg</th>
								<th scope="col">No</th>
								<!-- <th scope="col">4s</th>
								<th scope="col">6s</th> -->
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">7</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">8</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">9</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
								<tr>
									<th scope="row">10</th>
									<td>Prerak Mankad</td>
									<td>3</td>
									<td>3</td>
									<td>64</td>
									<td>64.00</td>
									<td>2</td>
								</tr>
							</tbody>
							</table>
							</div>

							</div>

							<div id="hundred" class="tabcontent">
							<!-- <h3>hundred tab title</h3> -->
						<div class="container table-responsive py-2"> 
							<table class="table table-bordered table-hover">
							<thead class="thead-dark">
								<tr>
								<th scope="col">#</th>
								<th scope="col">Batter</th>
								<th scope="col">Matches</th>
								<th scope="col">Inns</th>
								<th scope="col">Runs</th>
								<th scope="col">H.s</th>
								<th scope="col">100s</th>
								<!-- <th scope="col">4s</th>
								<th scope="col">6s</th> -->
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">7</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">8</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">9</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
								<tr>
									<th scope="row">10</th>
									<td>Shubman Gill</td>
									<td>13</td>
									<td>13</td>
									<td>576</td>
									<td>101</td>
									<td>1</td>
								</tr>
							</tbody>
							</table>
						</div>

							</div>

						<div id="fifties" class="tabcontent">
							<div class="container table-responsive py-2"> 
								<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
									<th scope="col">#</th>
									<th scope="col">Batter</th>
									<th scope="col">Matches</th>
									<th scope="col">Inns</th>
									<th scope="col">Runs</th>
									<th scope="col">H.s</th>
									<th scope="col">100s</th>
									<!-- <th scope="col">4s</th>
									<th scope="col">6s</th> -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>Shubman Gill</td>
										<td>13</td>
										<td>13</td>
										<td>576</td>
										<td>101</td>
										<td>1</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>

						<div id="wickets" class="tabcontent">
							<div class="container table-responsive py-2"> 
								<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
									<th scope="col">#</th>
									<th scope="col">Player</th>
									<th scope="col">Matches</th>
									<th scope="col">Overs</th>
									<th scope="col">Balls</th>
									<th scope="col">Wkts</th>
									<th scope="col">Avg</th>
									<th scope="col">Runs</th>
									<th scope="col">4-fers</th>
									<th scope="col">5-fers</th>
									<!-- <th scope="col">4s</th>
									<th scope="col">6s</th> -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>Mohammed Shami</td>
										<td>13</td>
										<td>51.0</td>
										<td>306</td>
										<td>23</td>
										<td>16.70</td>
										<td>384</td>
										<td>2</td>
										<td>3</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>

						<div id="bowl" class="tabcontent">
							<div class="container table-responsive py-2"> 
								<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
									<th scope="col">#</th>
									<th scope="col">Bowler	</th>
									<th scope="col">Overs	</th>
									<th scope="col">Matches</th>
									<th scope="col">Wkts</th>
									<th scope="col">Avg</th>
							
									<!-- <th scope="col">4s</th>
									<th scope="col">6s</th> -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>Mark Wood</td>
										<td>4</td>
										<td>16.0</td>
										<td>11</td>
										<td>11.87</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>

						<div id="best_bowling" class="tabcontent">
							<div class="container table-responsive py-2"> 
								<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
									<th scope="col">#</th>
									<th scope="col">Bowler	</th>
									<th scope="col">Vs</th>
									<th scope="col">Ovs</th>
									<th scope="col">Runs</th>
									<th scope="col">Wkts</th>
									<th scope="col">Bbi</th>
									<th scope="col">Maidens</th>
									<th scope="col">Econ</th>
							
									<!-- <th scope="col">4s</th>
									<th scope="col">6s</th> -->
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>Bhuvneshwar Kumar</td>
										<td>Gujarat Titans</td>
										<td>4.0</td>
										<td>14</td>
										<td>5</td>
										<td>5-14</td>
										<td>5</td>
										<td>3.5</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>

						<div id="haul" class="tabcontent">
							<div class="container table-responsive py-2"> 
								<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
									<th scope="col">#</th>
									<th scope="col">Bowler	</th>
									<th scope="col">Matches</th>
									<th scope="col">Overs</th>
									<th scope="col">Runs</th>
									<th scope="col">WKT</th>
									<th scope="col">4-fers</th>
									<th scope="col">5-fers</th>
							
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
										
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
										
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>Bhuvneshwar Kumar</td>
										<td>13</td>
										<td>47.0</td>
										<td>399</td>
										<td>15</td>
										<td>2</td>
										<td>1</td>
									</tr>
								</tbody>
								</table>
							</div>
						</div>

						<div id="b_economy" class="tabcontent">
							<div class="container table-responsive py-2"> 
								<table class="table table-bordered table-hover">
								<thead class="thead-dark">
									<tr>
									<th scope="col">#</th>
									<th scope="col">Bowler	</th>
									<th scope="col">Matches</th>
									<th scope="col">Overs</th>
									<th scope="col">Inns</th>
									<th scope="col">Wkts</th>
									<th scope="col">Eco</th>
									<th scope="col">Avg</th>
									<th scope="col">Sr</th>
							
									</tr>
								</thead>
								<tbody>
									<tr>
										<th scope="row">1</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">2</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">3</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">4</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">5</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">6</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">7</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">8</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">9</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
									<tr>
										<th scope="row">10</th>
										<td>Praveen Dubey</td>
										<td>1</td>
										<td>3.0</td>
										<td>1</td>
										<td>1</td>
										<td>6.33</td>
										<td>19.00</td>
										<td>18.00</td>
										
									</tr>
								</tbody>
								</table>
							</div>
						</div>

					</div>
				</div> 
			</div> 
		</main>

		
		<main class="in_numbers">
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
					</div> <!-- --> 
					<div class="col-lg-3 col-md-3 col-sm-6 blue">
						<div class="card">
							<h1> 89 <small> Fifties </small> </h1>
						</div>
					</div> <!-- --> 
					<div class="col-lg-3 col-md-3 col-sm-6 two_bg">
						<div class="card">
							<h1> 156 <small> Most Dot Balls Avesh Khan </small> </h1>
						</div>
					</div> <!-- -->
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
					</div> <!-- --> 
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
					</div> <!-- -->
					<div class="col-lg-3 col-md-3 col-sm-6 five_bg">
						<div class="card">
							<h1> 1548 <small> Four </small> </h1>
						</div>
					</div> <!-- --> 
					<div class="col-lg-3 col-md-3 col-sm-6 six_bg">
						<div class="card">
							<h1> 687 <small> Sixes </small> </h1>
						</div>
					</div> <!-- --> 
					<div class="col-lg-2 col-md-2 col-sm-6 seven_bg">
						<div class="card"> <img src="/img/pic.png" class="img-fluid d-block mx-auto" alt=""/> </div> 
					</div> <!-- -->
					<div class="col-lg-8 col-md-8 col-sm-6 eight_bg">
						<div class="card">
							<h1> Interesting Facts <span> " Chennai Super Kings holds the record for most Fair Play awards won in IPL history. " </span> </h1>
						</div> 
					</div> <!-- -->
					<div class="col-lg-2 col-md-2 col-sm-6 nine_bg">
						<div class="card"> <img src="/img/highlight.png" class="img-fluid d-block mx-auto" alt=""/> </div> 
					</div> <!-- -->
				</div> 
			</div> 
		</main>
		
		<main class="latest_news">
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
							</div> <!-- Item -->
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
							</div> <!-- Item -->
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
							</div> <!-- Item -->
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
							</div> <!-- Item -->
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
							</div> <!-- Item -->
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
							</div> <!-- Item -->
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
							</div> <!-- Item -->
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
	function openTab(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultOpen").click();
</script>
