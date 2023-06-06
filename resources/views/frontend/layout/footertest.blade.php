
	<footer>
		{{-- <div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="item first_menu">
						<a href="/" class="title">WTC</a>
						<!-- <a href="#" class="title">Standings</a>
						<a href="#" class="title">Fixtures</a> -->
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores voluptas cum eos, sapiente ullam officia tempora omnis commodi laudantium?</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="item">
						<h2 class="title">Home</h2>
						<ul>
							<li> <a href="/">HOME</a> </li>
							<li> <a href="/faq">FAQ </a> </li>
							<li> <a href="/polls">POLL OF THE DAY</a> </li>
						
		
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="item">
						<h2 class="title">MEDIA</h2>
						<ul>
							<li> <a href="/news">NEWS </a> </li>
							<li> <a href="/videogallery"> VIDEOS </a> </li> 
							<li> <a href="/gallery"> GALLERY </a> </li> 
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6 col-xs-6">
					<div class="item">
						<h2 class="title">OTHERS</h2>
						<ul>
						<li> <a href="/trivia">TRIVIA  </a> </li>
							<li> <a href="/stats">STATS </a> </li>
							<li> <a href="/live-score">LIVE SCORE</a> </li>
						</ul>
					</div>
				</div>
			</div>
		</div> --}}
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<p> © 2023 World Test Championship - All Rights Reserved. </p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<a href="#">Terms and Conditions</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 text-right">
						<a href="#">Privacy Policy</a>
					</div>
				</div>
			</div>
		</div>
	</footer>
</body>
</html>

<!-- <script async data-id="68611" src="https://cdn.widgetwhats.com/script.min.js"></script> -->

<!-- Js Plugins -->
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js'></script>
<!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js'></script> -->
<script src="{{asset('js/custom.js')}}"></script>


<script type="text/javascript">
	$(document).ready(function () {
		$('#dismiss, .overlay').on('click', function () {
			$('#sidebar').removeClass('active');
			$('.overlay').removeClass('active');
		});

		$('#sidebarCollapse').on('click', function () {
			$('#sidebar').addClass('active');
			$('.overlay').addClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		});
	});
</script>	
<script>
$('.btn-plus, .btn-minus').on('click', function(e) {
  const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
  const input = $(e.target).closest('.input-group').find('input');
  if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
  }
})
</script>
