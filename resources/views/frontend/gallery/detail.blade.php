@include('frontend.layout.headertest')
<style>


/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}


img.hover-shadow {
  transition: 0.3s;
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>
	<section id="">
		<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<!-- <a href="/venues" class="back_btn"> <img src="/img/icon/back_arrow.png" class="img-fluid" /> </a> -->
						<div class="div">
							<h2> GALLERY </h2> 
							<!-- <p> 03 October, 2021 | 98 Photos </p> -->
						</div>
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>
		<main class="gallery_details">
			<div class="container-fluid">
				<div class="row justify-content-md-center"> 
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<img src="/img/gallery/9S6A9400.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor img-fluid w-100" alt=""/>
						</div>
					</div>	<!-- -->
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<img src="/img/gallery/9S6A9400.jpg" onclick="openModal();currentSlide(2)" class="hover-shadow cursor img-fluid w-100" alt=""/>
						</div>
					</div>	<!-- -->
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<img src="/img/gallery/9S6A9400.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor img-fluid w-100" alt=""/>
						</div>
					</div>	<!-- -->
					<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-xs-6 gallery_listing">
						<div class="card card_border">
							<img src="/img/gallery/9S6A9400.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor img-fluid w-100" alt=""/>
						</div>
					</div>	<!-- -->
				</div>	
			</div>
		</main>
		@include('frontend.layout.partners_logo')
	</section>	
	

@include('frontend.layout.footertest')
<!-- Modal -->

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

		<div class="mySlides">
			<div class="numbertext">1 / 4</div>
			<img src="/img/gallery/9S6A9400.jpg" >
		</div>

		<div class="mySlides">
			<div class="numbertext">2 / 4</div>
			<img src="/img/gallery/9S6A9400.jpg" >
		</div>

		<div class="mySlides">
			<div class="numbertext">3 / 4</div>
			<img src="/img/gallery/9S6A9400.jpg" >
		</div>
		
		<div class="mySlides">
			<div class="numbertext">4 / 4</div>
			<img src="/img/gallery/9S6A9400.jpg" >
		</div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

  </div>
</div>

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>