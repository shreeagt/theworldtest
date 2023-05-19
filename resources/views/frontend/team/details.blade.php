@include('frontend.layout.header')

	<section id="">
		<div class="inner_banner team_innermenu">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<ul class="">
							<li class="active"> <a href="#"> <img src="/img/logos/india_legends.png" class="img-fluid mx-auto d-block" /> </a> </li>
							<li> <a href="#"> <img src="/img/logos/bangladesh.png" class="img-fluid mx-auto d-block" /> </a> </li>
							<li> <a href="#"> <img src="/img/logos/south_africa.png" class="img-fluid mx-auto d-block" /> </a> </li>
							<li> <a href="#"> <img src="/img/logos/australia.png" class="img-fluid mx-auto d-block" /> </a> </li>
							<li> <a href="#"> <img src="/img/logos/west_indies.png" class="img-fluid mx-auto d-block" /> </a> </li>
							<li> <a href="#"> <img src="/img/logos/england.png" class="img-fluid mx-auto d-block" /> </a> </li>
							<li> <a href="#"> <img src="/img/logos/srilanka.png" class="img-fluid mx-auto d-block" /> </a> </li>
						</ul>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>
		<div class="team_banner">
			<div class="container relative">
				<div class="row">
					<div class="col-sm-4">
						<div class="team_logo"> <img src="/img/logos/india_legends.png" class="img-fluid mx-auto d-block" /> </div>
					</div>
					<div class="col-sm-8">
						<h2 class="white"> Mumbai Indians </h2>
						<p class="official_team"> <a href="#"> Official Team Site </a>
							<span class="team_social">
								<a href="#" target="_blank" class="facebook"> <i class="fa fa-facebook"></i> </a>
								<a href="#" target="_blank" class="instagram"> <i class="fa fa-instagram"></i> </a>
								<a href="#" target="_blank" class="twitter"> <i class="fa fa-twitter"></i> </a>  
							</span>
						</p>
						<p class="trophy"> <img src="/img/icon/trophy.png" class="img-fluid" /> 2013, 2015, 2017, 2019, 2020 </p>
						<br />
					</div>
					<div class="col-sm-5">
						<p class="white"> Owner : Indiawin Sports Pvt. Ltd </p>
						<p class="white"> Venue : Wankhede Stadium </p>
					</div>
					<div class="col-sm-6">
						<p class="white"> Coach : Mahela Jayawardene </p> 
					</div>
				</div>
			</div>
			<img src="/img/team_banner.jpg" class="img-fluid w-100" />
		</div>
		
		<div class="team_nav">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-12 text-center">
						<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" id="pills-overview-tab" data-toggle="pill" href="#pills-overview" role="tab" aria-controls="pills-overview" aria-selected="true"> Overview </a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-schedule-tab" data-toggle="pill" href="#pills-schedule" role="tab" aria-controls="pills-schedule" aria-selected="false"> Schedule </a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-squad-tab" data-toggle="pill" href="#pills-squad" role="tab" aria-controls="pills-squad" aria-selected="false"> Squad </a>
							</li>
							<li class="nav-item" role="presentation">
								<a class="nav-link" id="pills-news-tab" data-toggle="pill" href="#pills-news" role="tab" aria-controls="pills-news" aria-selected="false"> News </a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
					
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-overview" role="tabpanel" aria-labelledby="pills-overview-tab">
				@include('frontend.team.overview')
			</div>
			<div class="tab-pane fade" id="pills-schedule" role="tabpanel" aria-labelledby="pills-schedule-tab">
				@include('frontend.team.schedule')
			</div>
			<div class="tab-pane fade" id="pills-squad" role="tabpanel" aria-labelledby="pills-squad-tab">
				@include('frontend.team.squad')
			</div>
			<div class="tab-pane fade" id="pills-news" role="tabpanel" aria-labelledby="pills-news-tab">
				@include('frontend.team.news')
			</div>
			
			</div>
		</div>
		
		@include('frontend.layout.partners_logo')
	
	</section>	
	
@include('frontend.layout.footer')

<script>
    $(document).ready(function () {
        var owl = $("#features_interviews");
        owl.owlCarousel({
            autoPlay: 3000,
            items: 4,
			loop:true,
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