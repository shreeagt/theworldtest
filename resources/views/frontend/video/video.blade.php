@include('frontend.layout.headertest')
<link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css">
<style>
 .ap-img-content .video_play {
    /* background: #f59622; */
    padding-top: 15px;
    width: 50px;
    height: 50px;
    display: block;
    margin: 0 auto;
    border-radius: 50%;
    position: absolute;
    left: 0px;
    right: 0px;
    top: 44px;
}
</style>
<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2>All Video </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>

        <section class="latest_news">
                <div class="container-fluid mt-4">
                <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 side_filter_nav ">
                <aside>
                <!-- <div class="card_bg mb-4">
                <div class="card">
                <div class="row right_blog_nav">
                <div class="col-md-12 col-sm-6">
                <div class="thumb">
                <h3>Recent Posts </h3>
                <ul class="recent_post">
                <li><a href="https://shreeagt.com/blog/difference-between-jdk-jre-jvm" class="blog_head">Difference between JDK, JRE, and JVM</a></li>
                <li><a href="https://shreeagt.com/blog/java-oops-concepts" class="blog_head">Java OOPs Concepts</a></li>
                <li><a href="https://shreeagt.com/blog/how-to-install-NetBeans-on-MacOS" class="blog_head">How to Install NetBeans on MacOS ?</a></li>
                <li><a href="https://shreeagt.com/blog/how-to-install-GIMP-on-MacOS" class="blog_head">How to Install GIMP on MacOS ?</a></li>
                <li><a href="https://shreeagt.com/blog/how-to-install-Drupal-on-MacOS" class="blog_head">How to Install Drupal on MacOS ?</a></li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div> -->
                <div class="card_bg">
                <div class="card">
                <div class="row right_blog_nav">
                <div class="col-md-12 col-sm-6">
                <div class="thumb">
                <h3>SELECT TEAMS</h3>
                <ul class="recent_post recent_post_categories">
                <li><a href="/news">All TEAMS</a></li>
                                                 
                <li> <a href="#"> <img src="/img/aus.jpg" alt="flag"> AUSTRALIA</a></li>
                <li> <a href="#"><img src="/img/bang.jpg" alt="flag">BANGLADESH </a> </li>
                <li>  <a href="#"><img src="/img/eng.jpg" alt="flag">ENGLAND </a> </li>
                <li> <a href="#"><img src="/img/ind.jpg" alt="flag">INDIA </a> </li>
                <li> <a href="#"><img src="/img/nz.jpg" alt="flag">NEW ZEALAND</a> </li>
                <li> <a href="#"><img src="/img/pak.jpg" alt="flag">PAKISTAN</a> </li>
                <li> <a href="#"><img src="/img/sa.jpg" alt="flag">SOUTH AFRICA</a> </li>
                <li> <a href="#"><img src="/img/srl.jpg" alt="flag">SRI LANKA</a> </li>
                <li> <a href="#"><img src="/img/wid.jpg" alt="flag">WEST INDIES</a> </li>
                </ul>
                </div>
                </div>
                </div>
                </div>
                </div>
                </aside>
                </div>
                    <div class="col-md-9 ">
                        <div class="row mb-4">
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                    <a href="#" data-toggle="modal" data-target="#exampleModal">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </a>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>

                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                              <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                            <div class="col-md-4 mb-4">
                                <div class="card">
                                <div class="ap-slide-content relative">
									<div class="ap-img-box relative">
										<img src="/img/videothumb.jpg" class="img-fluid">
									</div>
									<div class="ap-img-content">
										<span class="video_play"> <img src="/img/play.png" class="img-fluid"> </span>
										<div class="ap-date-wrp row">
											<span class="col-sm-6 col-xs-6 text-left"> 22 Jan, 2022 </span>
											<span class="col-sm-6 col-xs-6 text-right"><i class="fa fa-eye" aria-hidden="true"></i>752,643</span>
										</div>
										<h5 class="ap-slide-title"> Capping off CSK’s IPL 2021 win with Faf, Robin and Fleming </h5>
									</div>
								</div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row mb-4">
                        <div class="col-md-4">
                                <div class="card">
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
                            </div>

                            <div class="col-md-4">
                                <div class="card">
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
                            </div>

                            <div class="col-md-4">
                                <div class="card">
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
                            </div>
                        </div> -->
                        <!-- <div class="row">
                        <div class="col-md-4">
                                <div class="card">
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
                            </div>

                            <div class="col-md-4">
                                <div class="card">
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
                            </div>

                            <div class="col-md-4">
                                <div class="card">
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
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </section>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="video-section">
                  <div class="video-player">
                     <video id="mainVideo" controls="">
                        <source src="http://media.w3.org/2010/05/sintel/trailer.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                     </video>
                     <div class="play-button" onclick="playMainVideo()">
                        <img src="/img/icon/play-inline-wtc.png" alt="Play Button">
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
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>All seven of Kyle Jamieson's WTC21 Final wickets</p>
                              <p>Tue 6 Jul</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
                           <div>
                              <p>Royal Stag Make It Large Moment | WTC21 Final</p>
                              <p>Thu 24 Jun</p>
                           </div>
                        </div>
                        <div class="video-thumbnail" onclick="changeVideo('dummy.mp4')">
                           <img src="/img/thumbnail.jpg" alt="Video Thumbnail">
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
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
        @include('frontend.layout.partners_logo')
@include('frontend.layout.footertest')