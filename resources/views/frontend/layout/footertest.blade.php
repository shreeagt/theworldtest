
	<footer  class="footer-desktop">
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<p> © 2023 World Test Championship - All Rights Reserved. Powered by The Times of India </p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
						<a href="#">T&C</a>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
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
