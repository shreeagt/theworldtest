@include('frontend.layout.headertest')
<style>
    
@media (max-width:675px){
    .wrapper{
        max-width: 300px;
}
}

.wrapper header{
  font-size: 22px;
  font-weight: 600;
}
.wrapper .poll-area{
  margin: 20px 0 15px 0;
}
.poll-area label{
  display: block;
  background: #f37224;
  margin-bottom: 10px;
  padding: 8px 15px;
  border: 2px solid #e6e6e6;
  transition: all 0.2s ease;
}

label.opt-1.selected {
    border: 2px solid #FFCD00;
}

label.opt-2.selected {
    border: 2px solid #01638c;
}

label.opt-3.selected {
    border: 2px solid #AA4A44;
}

label.opt-4.selected {
    border: 2px solid #01638c;
}

div#pstyle1::after {
    background: #FFCD00 !important;
}

div#pstyle2::after {
    background: #01638c !important;
}

div#pstyle3::after {
    background:  #AA4A44 !important;
}

div#pstyle4::after {
    background: #01638c !important;
}

label.opt-1.selected .row .circle{
    border-color: #FFCD00 !important;
  }

  label.opt-2.selected .row .circle{
    border-color: #01638c !important;
  }

  label.opt-3.selected .row .circle{
    border-color: #AA4A44 !important;
  }

  label.opt-4.selected .row .circle{
    border-color: #01638c !important;
  }


label.opt-1 .row .circle::after{
    background: #FFCD00 !important;
  }

  label.opt-2 .row .circle::after{
    background: #01638c !important;
}

  label.opt-3 .row .circle::after{
    background: #AA4A44 !important;
  }

  label.opt-4 .row .circle::after{
    background: #01638c !important;
  }

  label .row {
    margin: 10px;
    display: flex;
    pointer-events: none;
    justify-content: space-between;
}
label .row .column{
  display: flex;
  align-items: center;
}
label .row .circle{
  height: 19px;
  width: 19px;
  display: block;
  border: 2px solid #ccc;
  border-radius: 50%;
  margin-right: 10px;
  position: relative;
}
label .row .circle::after {
    content: "";
    height: 50%;
    width: 50%;
    border-radius: inherit;
    position: absolute;
    left: 25%;
    top: 25%;
    display: none;
}
.poll-area label:hover .row .circle::after{
  display: block;
  background: #e6e6e6;
}
label.selected .row .circle::after{
  display: block;
}
label .row span{
  font-size: 16px;
  font-weight: 500;
}
label .row .percent{
  display: none;
}
label .progress{
  height: 7px;
  width: 100%;
  position: relative;
  background: #f0f0f0;
  margin: 8px 0 3px 0;
  border-radius: 30px;
  display: none;
  pointer-events: none;
}
label .progress:after{
  position: absolute;
  content: "";
  height: 100%;
  background: #ccc;
  width: calc(1% * var(--w));
  border-radius: inherit;
  transition: all 0.2s ease;
}
label.selectall .progress,
label.selectall .row .percent{
  display: block;
}
input[type="radio"],
input[type="checkbox"]{
  display: none;
}
</style>

<section>

<main class="banner">
			<div class="container">
				<div class="row justify-content-md-center">					
					<div class="col-lg-9 col-md-9">
						<div class="card banner_card">
							<div id="demo" class="carousel slide" data-ride="carousel">
								<!--
								<ul class="carousel-indicators">
									<li data-target="#demo" data-slide-to="0" class="active"></li>
									<li data-target="#demo" data-slide-to="1"></li>
									<li data-target="#demo" data-slide-to="2"></li>
								</ul>
								-->
								{{-- <div class="carousel-inner">
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
					</div> --}}
					{{-- <div class="col-lg-3 col-md-3">
                    <div class="wrapper">
                            <header>Who can win this match? <br></header>
                            <div class="poll-area">
                            <input type="checkbox" name="poll" id="opt-1">
                            <input type="checkbox" name="poll" id="opt-2">
                            <input type="checkbox" name="poll" id="opt-3">
                            <input type="checkbox" name="poll" id="opt-4">
                            <label for="opt-1" class="opt-1">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">Australia</span>
                                </div>
                                <span class="percent">25%</span>
                                </div>
                                <div class="progress" id="pstyle1" style='--w:25;'></div>
                            </label>
                            <label for="opt-2" class="opt-2">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">India</span>
                                </div>
                                <span class="percent">45%</span>
                                </div>
                                <div class="progress" id="pstyle2" style='--w:45;'></div>
                            </label>
                            <label for="opt-3" class="opt-3">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">Draw</span>
                                </div>
                                <span class="percent">30%</span>
                                </div>
                                <div class="progress" id="pstyle3" style='--w:30;'></div>
                            </label> --}}
                            <!-- <label for="opt-4" class="opt-4">
                                <div class="row">
                                <div class="column">
                                    <span class="circle"></span>
                                    <span class="text">Draw</span>
                                </div>
                                <span class="percent">35%</span>
                                </div>
                                <div class="progress" id="pstyle4" style='--w:35;'></div>
                            </label> -->
                            {{-- </div>
                        </div>
					</div>	
				</div>	
			</div>
		</main> --}}

    <div class="col-lg-6">
      {{-- <h3 class="text-center mb-30"> POLL OF THE DAY</h3> --}}
      <div id="q-cont">
      <div class="wrapper">
                   <header>Who can win this match? <br></header>
                   <div class="poll-area">
                   <input type="checkbox" name="poll" id="opt-1">
                   <input type="checkbox" name="poll" id="opt-2">
                   <input type="checkbox" name="poll" id="opt-3">
                   <input type="checkbox" name="poll" id="opt-4">
                   <label for="opt-1" class="opt-1">
                       <div class="row">
                       <div class="column">
                           <span class="circle"></span>
                           <span class="text">Australia</span>
                       </div>
                       <span class="percent">25%</span>
                       </div>
                       <div class="progress" id="pstyle1" style='--w:25;'></div>
                   </label>
                   <label for="opt-2" class="opt-2">
                       <div class="row">
                       <div class="column">
                           <span class="circle"></span>
                           <span class="text">India</span>
                       </div>
                       <span class="percent">45%</span>
                       </div>
                       <div class="progress" id="pstyle2" style='--w:45;'></div>
                   </label>
                   <label for="opt-3" class="opt-3">
                       <div class="row">
                       <div class="column">
                           <span class="circle"></span>
                           <span class="text">Draw</span>
                       </div>
                       <span class="percent">30%</span>
                       </div>
                       <div class="progress" id="pstyle3" style='--w:30;'></div>
                   </label>

                   </div>
               </div>

   </div>
   </div>
</div>
</div>
</main>


<main class="features_interviews">
			<div class="container">
				<div class="row justify-content-md-center">
					<div class="col-lg-12 text-left">

                
                    
		
				</div> 
			</div> 
		</main>
        </section>
@include('frontend.layout.footertest')

<script>
    const options = document.querySelectorAll("label");
for (let i = 0; i < options.length; i++) {
  options[i].addEventListener("click", ()=>{
    for (let j = 0; j < options.length; j++) {
      if(options[j].classList.contains("selected")){
        options[j].classList.remove("selected");
      }
    }

    options[i].classList.add("selected");
    for (let k = 0; k < options.length; k++) {
      options[k].classList.add("selectall");
    }

    let forVal = options[i].getAttribute("for");
    let selectInput = document.querySelector("#"+forVal);
    let getAtt = selectInput.getAttribute("type");
    if(getAtt == "checkbox"){
      selectInput.setAttribute("type", "radio");
    }else if(selectInput.checked == true){
      options[i].classList.remove("selected");
      selectInput.setAttribute("type", "checkbox");
    }

    let array = [];
    for (let l = 0; l < options.length; l++) {
      if(options[l].classList.contains("selected")){
        array.push(l);
      }
    }
    if(array.length == 0){
      for (let m = 0; m < options.length; m++) {
        options[m].removeAttribute("class");
      }
    }
  });
}
</script>