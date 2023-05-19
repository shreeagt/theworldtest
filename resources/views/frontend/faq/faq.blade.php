@include('frontend.layout.headertest')
 
<section id="faq">
<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2> FAQ'S</h2>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>
<div class="container relative mt-4">
<div class="row justify-content-md-center">
<div class="col-lg-12">
<!-- <h2 class="testinomial-header mb-3"><span class style="color:#00c292;">FAQ'S</span></h2>
<br/> -->
<div class="bs-example text-left">
<div class="accordion" id="accordionExample">
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingZero">
<h2 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapseZero">
<span>1. Who can win this test match? </span>
<i class="fa fa-plus"></i> </button></h2>
</div>
<div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
<div class="card-body">
<p>India
</p>
</div>
</div>
</div> <!-- -->
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingOne">
<h2 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
<span> 2. Who can win this test match? </span>
<i class="fa fa-plus"></i> </button></h2>
</div>
<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="card-body">
<p>India
</p>
</div>
</div>
</div>
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingTwo">
<h2 class="mb-0"> <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
<span>3. Who can win this test match? </span>
<i class="fa fa-plus"></i> </button> </h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
<p>India</p>
</div>
</div>
</div>

<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingFour">
<h2 class="mb-0"> <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">
<span>4. Who can win this test match? 
</span>
<i class="fa fa-plus"></i> </button> </h2>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
<div class="card-body">
<p> India
</p>
</div>
</div>
</div>
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingFive">
<h2 class="mb-0"> <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">
<span>5. Who can win this test match? 
</span>
<i class="fa fa-plus"></i> </button> </h2>
</div>
<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
<div class="card-body">
<p> India</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
@include('frontend.layout.footertest')

<script>
    
$(document).ready(function(){
    // Add minus icon for collapse element which is open by default
    $(".collapse.show").each(function(){
        $(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
    });
    
    // Toggle plus minus icon on show hide of collapse element
    $(".collapse").on('show.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
    }).on('hide.bs.collapse', function(){
        $(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
    });
});
</script>