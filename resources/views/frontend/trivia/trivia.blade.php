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
                        Who is the highest run-scorer in the ICC World Test Championship 2019-2021??
                     </div>
                     <div class="options">
                        <span class="op" for="q1op1">Virat Kohli</span><span class="op op2" for="q1op2">Kane Willaimson</span><br /><span class="op" for="q1op3">Marnus Labuschagne</span><span class="op op2" for="q1op4">Ajinkya Rahane</span>
                     </div>
                  </div>
                  <div class="slide" id="slide4">
                     <div class="re">
                        Submit
                     </div>
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