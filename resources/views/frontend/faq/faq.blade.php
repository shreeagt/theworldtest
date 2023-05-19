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
<span>Can I setup my own technical specifications for my requirement </span>
<i class="fa fa-plus"></i> </button></h2>
</div>
<div id="collapseZero" class="collapse" aria-labelledby="headingZero" data-parent="#accordionExample">
<div class="card-body">
<p>Yes
</p>
</div>
</div>
</div> <!-- -->
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingOne">
<h2 class="mb-0"> <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne">
<span> Can 2 people from same company participate in same auction</span>
<i class="fa fa-plus"></i> </button></h2>
</div>
<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
<div class="card-body">
<p>No
</p>
</div>
</div>
</div>
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingTwo">
<h2 class="mb-0"> <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo">
<span>Is my security deposit refundable?</span>
<i class="fa fa-plus"></i> </button> </h2>
</div>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
<div class="card-body">
<p>Only Auction Winner’s security deposit is directly transferred to the Auction Host account at end of auction, all other participants’ security deposit can be kept in ComX wallet or refunded back.</p>
</div>
</div>
</div>

<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingFour">
<h2 class="mb-0"> <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour">
<span>What happens if I win the auction but host decides to decline orders in technical grounds.
</span>
<i class="fa fa-plus"></i> </button> </h2>
</div>
<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
<div class="card-body">
<p> If you have accepted All auction conditions and won the auction, the hosts’ security deposit will be deposit into your account in case they decide to decline orders on technical grounds.
</p>
</div>
</div>
</div>
<div data-scrollreveal="enter bottom over 1.5s">
<div class="card-header collapsed" id="headingFive">
<h2 class="mb-0"> <button type="button" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive">
<span>Does host also pay security deposit?
</span>
<i class="fa fa-plus"></i> </button> </h2>
</div>
<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
<div class="card-body">
<p> To ensure equal playing field, ComXnow has a feature where security deposit
is collected from both host and participant. In case host dishonors the
winning bid, they lose their security deposit.</p>
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