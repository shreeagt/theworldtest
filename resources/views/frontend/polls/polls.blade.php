@include('frontend.layout.headertest')
<style>
    
@media (max-width:675px){
    .wrapper{
        max-width: 300px;
}
}

.wrapper header{
  font-weight: 500;
font-family: 'PT Sans', sans-serif;
font-size: 25px;
}
.wrapper .poll-area{
  margin: 20px 0 15px 0;
}
.poll-area label{
  display: block;
  background: #817464;
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
  color: #f0f0f0;
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
  <div class="inner_banner">
    <div class="container">
      <div class="row">				
        <div class="col-md-12">
          <h2>POLL OF THE DAY </h2> 
        </div>
      </div> <!-- Row -->
    </div> <!-- Container -->
  </div>

<main class="banner">
			<div class="container">
				<div class="row justify-content-md-center">					
					<div class="col-lg-6 ">
            {{-- <h3 class="text-center mb-30"> POLL OF THE DAY</h3> --}}
						<div class="card banner_card">
							<div id="demo" class="carousel slide" data-ride="carousel">
								

    <div class="col-lg-12">     
      <div id="q-cont">
        <div class="wrapper">
                   <header>@if(isset($question2) && !empty($question2->question))
                    {{$question2->question}}
                   @endif <br></header>
                   <div class="poll-area">
                   
                   <label for="opt-1" class="opt-1 question2_label">
                       <div class="row">
                       <div class="column">
                           <span class="circle"></span>
                           <span class="text question2" data-options="{{$question2->poll_id."-".$question2->option1}}"> @if(isset($question2) && !empty($question2->option1))
                            {{$question2->option1}}
                           @endif</span>
                       </div>
                       <span class="percent option1"></span>
                       </div>
                       <div class="progress" id="pstyle1" ></div>
                   </label>
                   <label for="opt-2" class="opt-2 question2_label">
                       <div class="row">
                       <div class="column">
                           <span class="circle"></span>
                           <span class="text question2" data-options="{{$question2->poll_id."-".$question2->option2}}">@if(isset($question2) && !empty($question2->option2))
                            {{$question2->option2}}
                           @endif</span>
                       </div>
                       <span class="percent option2"></span>
                       </div>
                       <div class="progress" id="pstyle2" ></div>
                   </label>
                   <label for="opt-3" class="opt-3 question2_label">
                       <div class="row">
                       <div class="column">
                           <span class="circle"></span>
                           <span class="text question2"  data-options="{{$question2->poll_id."-".$question2->option3}}" >
                            @if(isset($question2) && !empty($question2->option3))
                            {{$question2->option3}}
                           @endif</span>
                       </div>
                       <span class="percent option3"></span>
                       </div>
                       <div class="progress" id="pstyle3" ></div>
                   </label>
                   <span class="question2answer"></span>
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
<script>
  // localStorage.clear();
  var APP_URL = {!! json_encode(url('/')) !!};
  
   $(document).ready(function() {
        $('.question2_label').click(function(){
           var question2_local = localStorage.getItem('question2');
              var question2_answer = localStorage.getItem('question2');
           if(question2_local!="1"){  
              localStorage.setItem('question2', 1);
              var dataOptions = $(this).find('.question2').data('options');       
           
              $.ajax
              ({ 
                 headers: {
                       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 },
                 type: "POST",
                 url: APP_URL+"/resultstorequestion2", 
                 // url: "https://icc-wtc.matrixpanel.in/resultstorequestion2", // Replace with the appropriate URL of your server-side endpoint
                 dataType: 'json',
                 data:{"dataOptions":dataOptions},
                 success: function(result)
                 {
                    $(".option1").text(result.australia_per+"%");
                    $("#pstyle1")[0].style.setProperty("--w", result.australia_per);
                    $(".option2").text(result.india_per+"%");
                    $("#pstyle2")[0].style.setProperty("--w", result.india_per);
                    $(".option3").text(result.draw_per+"%");
                    $("#pstyle3")[0].style.setProperty("--w", result.draw_per);
                    $(".circle").css('display', 'none');
                   
                    localStorage.setItem('question2_answer',result.answer);
                    $(".question2answer").text("Your answer is "+result.answer);
                 }
              });
           }
              
        });

        function makeAjaxCall() {            
           // Perform your Ajax call here
           $id={{$question2->poll_id}};
           $.ajax({
              url: APP_URL+"/report/"+$id,
              // url: "https://icc-wtc.matrixpanel.in/report",
              method: 'GET',
              dataType:"json",
              success: function(response) {                 
                 // Handle the Ajax response
                 $(".option1").text(response.australia_per+"%");
                 $("#pstyle1")[0].style.setProperty("--w", response.australia_per);
                 $(".option2").text(response.india_per+"%");
                 $("#pstyle2")[0].style.setProperty("--w", response.india_per);
                 $(".option3").text(response.draw_per+"%");
                 $("#pstyle3")[0].style.setProperty("--w", response.draw_per);

                 
              },
              error: function(error) {
                 // Handle any errors that occur during the Ajax call
                 console.error(error);
              }
           });
        }

        // Call the Ajax function every 5 seconds (5000 milliseconds)
        setInterval(makeAjaxCall, 5000);
   });
 

 
  

  var question2_local = localStorage.getItem('question2');
  if(question2_local==1){
     $(".circle").css('display', 'none');
  }
  let question2_text_local = localStorage.getItem('question2_answer');
  if(question2_text_local!="" && question2_text_local!=null){
     $(".question2answer").text("Your answer is "+question2_text_local);
  }

  
                    
</script>