@include('frontend.layout.headertest')
<link rel="stylesheet" href="{{asset('css/stylerst.css')}}?v=1.3" type="text/css">
<style>
    
.quiz,
.choices {
  list-style-type: none;
  padding: 0;
}

.choices li {
  margin-bottom: 5px;
}

.choices label {
  display: flex;
  align-items: center;
}

.choices label,
input[type="radio"] {
  cursor: pointer;
}

input[type="radio"] {
  margin-right: 8px;
}

.view-results {
  padding: 1rem;
  cursor: pointer;
  font-size: inherit;
  color: white;
  background: #f37224;
  border-radius: 8px;
  margin-right: 5px;
}

.my-results {
  padding: 1rem;
  border: 1px solid goldenrod;
}


li.quiz_list {
    padding: 20px;
    border-radius: 20px;
    background: aliceblue;
    background: rgba(95,45,14,0.2);
}
/* .quiz_list { background:url(../img/facts.png) 50% 0 no-repeat; background-size:cover; position:relative; } */
</style>


<section>

<div class="inner_banner">
			<div class="container">
				<div class="row">				
					<div class="col-md-12">
						<h2>Trivia </h2> 
					</div>
				</div> <!-- Row -->
			</div> <!-- Container -->
		</div>
      

    <main class="latest_news">
      <div class="container-fluid">
         <div class="row justify-content-md-center">
            <div class="col-lg-6">
               <h3 class="text-center mb-30"> TRIVIA OF THE DAY</h3>
               <div id="q-cont">
                  <div class="slide" id="slide1">
                     <div class="question">
                      @if(isset($question1) && !empty($question1->question))
                      {{$question1->question}}
                     @endif
                     </div>
                     <div class="options">
                        <span class="op" for="q1op1" data-text="{{$question1->quize_id."-".$question1->option1}}"> @if(isset($question1) && !empty($question1->option1))
                          {{$question1->option1}}
                         @endif</span>
                        <span class="op op2" for="q1op2" data-text="{{$question1->quize_id."-".$question1->option2}}">@if(isset($question1) && !empty($question1->option2))
                          {{$question1->option2}}
                         @endif</span><br />
                        <span class="op" for="q1op3" data-text="{{$question1->quize_id."-".$question1->option3}}">@if(isset($question1) && !empty($question1->option3))
                          {{$question1->option3}}
                         @endif</span>
                        <span class="op op2" for="q1op4" data-text="{{$question1->quize_id."-".$question1->option4}}">@if(isset($question1) && !empty($question1->option4))
                          {{$question1->option4}}
                         @endif</span>
                     </div>
                  </div>
                  <div class="slide" id="slide4">
                    <div class="re trivia_button" onclick="submitquestion()">
                      Submit
                   </div>
                   <span class="success_comment" style="display: none;">
                      @if(isset($question1) && !empty($question1->question))
                      {{$question1->success_comment}}
                      @endif
                   </span>
                   <span class="failure_comment" style="display: none;">
                      @if(isset($question1) && !empty($question1->question))
                      {{$question1->failure_comment}}
                      @endif
                   </span>
                  </div>
               </div>
            </div>
</section>




@include('frontend.layout.footertest')

<script>
  var answers = ["A", "C", "B"];
  var tot = answers.length;

  function getCheckedValue(radioName) {
    var radios = document.getElementsByName(radioName); // Get radio group by-name
    for (var y = 0; y < radios.length; y++)
      if (radios[y].checked) return radios[y].value; // return the checked value
  }

  $(window).ready(function(){
   	var left, width, cont = "#q-cont";
   	$('.op').click(function(){
   		$('.op').css("background","#f37224");
         $('.op').removeClass("question1");
   		$(this).css("background","#192462");
         $(this).addClass("question1");
   	});
   });

  function showResults() {
    var score = getScore();
    var resultHTML = "<ul class='result-list'>";
    for (var i = 0; i < tot; i++) {
      var selectedValue = getCheckedValue("question" + i);
      if (selectedValue === answers[i]) {
        resultHTML += "<li>Question " + (i + 1) + ": Correct (Answer: " + answers[i] + ")</li>";
      } else {
        resultHTML += "<li>Question " + (i + 1) + ": Incorrect (Correct answer: " + answers[i] + ")</li>";
      }
    }
    resultHTML += "</ul>";
    document.getElementById("result-container").innerHTML =
      "Your score is " + score + "/" + tot + "<br><br>" + resultHTML;
  }

  function getScore() {
    var score = 0;
    for (var i = 0; i < tot; i++)
      if (getCheckedValue("question" + i) === answers[i]) score += 1; // increment only
    return score;
  }
</script>

<script>
  // localStorage.clear();
  var APP_URL = {!! json_encode(url('/')) !!}; 

  function submitquestion(){
     
     var data = localStorage.getItem('checking');
    
     if(data!="1"){       
       
           var answer = $('.question1').data('text');        
           $.ajax({
              headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: "POST",
              // url: "https://icc-wtc.matrixpanel.in/resultstore", // Replace with the appropriate URL of your server-side endpoint
              url: APP_URL+"/resultstore",
              dataType: 'json',
              data:{"answer":answer},
              success: function(data) {
                 console.log("dfdsf"+data);
                 if(data==1){
                    localStorage.setItem('checking', 1);
                    $(".success_comment").css('display', 'block');
                    $(".failure_comment").css('display', 'none');
                  
                 }else{
                    localStorage.setItem('checking', 2);
                    $(".success_comment").css('display', 'none');
                    $(".failure_comment").css('display', 'block');;
                   
                 }  
                 $(".trivia_button").hide();
              },
              error: function() {
                 
              }
           });   
     }
     // else{
     //    alert("6");
     // }
     
    
  }

  var result = localStorage.getItem('checking');
  if(result==1){ 
     $(".trivia_button").hide();   
     $(".success_comment").css('display', 'block');
     $(".failure_comment").css('display', 'none');
  }else if(result==2){
     $(".trivia_button").hide();
     $(".success_comment").css('display', 'none');
     $(".failure_comment").css('display', 'block');;
  }



  
                    
</script>