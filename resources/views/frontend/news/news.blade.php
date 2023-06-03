@include('frontend.layout.headertest')

<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2>News </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>

        <section class="latest_news">
                <div class="container-fluid mt-4">
                <div class="row">
                <!-- <div class="col-xl-3 col-lg-3 col-md-12 side_filter_nav ">
                <aside>
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
                </div> -->
                    <div class="col-md-12">
                        <div class="row mb-3">
                            @foreach ($blogs as $blog)
                            <div class="col-md-3 mb-4">
                                <a href="{{ route('blogs.show', $blog->id) }}">
                                <div class="card">
                                    <div class="ap-slide-content relative">
                                        <div class="ap-img-box relative">
                                            <img src="{{ $blog->blog_thumbnail }}" class="img-fluid" />
                                        </div>
                                        <div class="ap-img-content">
                                            <div class="ap-date-wrp">
                                                <span>{{ $blog->created_at->format('d M, Y') }}</span>
                                            </div>
                                            <h5 class="ap-slide-title">{{ $blog->blog_title }}</h5>
                                            <a href="{{ route('blogs.show', ['id' => $blog->id]) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        
                        



                        </div>

                    
                    </div>
                </div>
            </div>
        </section>
        @include('frontend.layout.partners_logo')
@include('frontend.layout.footertest')