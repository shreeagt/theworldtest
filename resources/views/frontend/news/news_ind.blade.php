@include('frontend.layout.headertest')
<style>
    .img-ind img{
        width:100%;
    }
    /* .inner_banner {
    background: url(../img/inner_bann.png) 50% 0 no-repeat;
    background-size: cover;
    padding-top: 34px;
    height: 60%;
} */
h5.thumbnail__title {
    padding: 10px;
}

span.thumbnail__category {
    display: block;
    font-size: 12px;
    font-weight: 800;
    padding: 0 10px;
}

time.thumbnail__date-day {
    display: block;
    font-size: 12px;
    /* font-weight: 800; */
    padding: 0 10px;
}

</style>
<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2>The Fight of Ind and Aus Continue </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>

        <section class="latest_news">
                <div class="container mt-4">
                <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 side_filter_nav ">
                <aside>
               
                <div class="card_bg mb-4">
                    <div class="card">
                        <div class="row right_blog_nav">
                        <div class="col-md-12 col-sm-6">
                                <div class="thumb">
                                <h3>Latest News</h3>
                                <div class="img-ind">
                                        <img src="/img/ind-vs-aus.jpg" alt="blog" class="img-fluid">
                                    </div>
                                    <h5 class="thumbnail__title"><span>The Fight of Ind and Aus Continue</span></h5>
                                    <div class="thumbnail__meta">
                                        <span class="thumbnail__category">The Fight of Ind and Aus Continue</span>
                                        <time class="thumbnail__date-day">Wed 10 May</time>
                                    </div>
                                    <ul class="recent_post">
                                        <li><a href="#" class="blog_head">The Fight of Ind and Aus Continue</a></li>
                                        <li><a href="#" class="blog_head">The Fight of Ind and Aus Continue</a></li>
                                        <li><a href="#" class="blog_head">The Fight of Ind and Aus Continue</a></li>
                                        <li><a href="#" class="blog_head">The Fight of Ind and Aus Continue</a></li>
                                        <li><a href="#" class="blog_head">The Fight of Ind and Aus Continue</a></li>
                                    </ul>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

                <!-- <div class="card_bg">
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
                </div> -->
                </aside>

                </div>
                    <div class="col-md-9">
                       
                        <div class="row">
                                <div class="col-lg-12">
                                    <div class="img-ind">
                                        <img src="/img/ind-vs-aus.jpg" alt="blog" class="img-fluid">
                                    </div>
                                <h2><strong>The Fight of Ind and Aus Continue</strong></h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia, fugit dolorem? Repudiandae, porro dolore nihil beatae asperiores nulla cumque accusamus.</p>
                                </div>
                            </div>

<hr>
                            <div class="blog_nav text-center">
                                <a href="/news" rel="prev">
                                <i class="font-icon-post fa fa-angle-double-left"></i>
                                <span class="post-title">Back to News Page</span>
                                </a>
                            </div>
                            <hr>
                    </div>
                   
                </div>
            </div>
        </section>

        @include('frontend.layout.partners_logo')
@include('frontend.layout.footertest')