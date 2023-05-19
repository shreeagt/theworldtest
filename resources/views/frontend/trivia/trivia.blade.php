@include('frontend.layout.headertest')
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
        <main class="features_interviews">
			<div class="container">
				<div class="row justify-content-md-center">
                    <div class="col-lg-3"></div>
					<div class="col-lg-6 text-left">

                            <ul class="quiz">
                            <li class="quiz_list">
                                <h4>How many letters are there in "JS"? </h4>
                                <ul class="choices">
                                <li><label><input type="radio" name="question0" value="A"><span>2</span></label></li>
                                <li><label><input type="radio" name="question0" value="B"><span>1</span></label></li>
                                <li><label><input type="radio" name="question0" value="C"><span>3</span></label></li>
                                <li><label><input type="radio" name="question0" value="D"><span>4</span></label></li>
                                </ul>
                            </li>
                            <li class="quiz_list">
                                <h4>How many letters are there in "BMX"?</h4>
                                <ul class="choices">
                                <li><label><input type="radio" name="question1" value="A"><span>2</span></label></li>
                                <li><label><input type="radio" name="question1" value="B"><span>1</span></label></li>
                                <li><label><input type="radio" name="question1" value="C"><span>3</span></label></li>
                                <li><label><input type="radio" name="question1" value="D"><span>4</span></label></li>
                                </ul>
                            </li>
                            <li class="quiz_list">
                                <h4>How many letters are there in "A"? </h4>
                                <ul class="choices">
                                <li><label><input type="radio" name="question2" value="A"><span>2</span></label></li>
                                <li><label><input type="radio" name="question2" value="B"><span>1</span></label></li>
                                <li><label><input type="radio" name="question2" value="C"><span>3</span></label></li>
                                <li><label><input type="radio" name="question2" value="D"><span>4</span></label></li>
                                </ul>
                            </li>
                            </ul>

                            <button class="view-results" onclick="showResults()">View Results</button>
                            <!-- <span id="myresults" class="my-results">My results will appear here</span> -->
                            <div id="result-container"></div>    
                            
				</div> 
                <div class="col-lg-3"></div>
			</div> 
		</main>
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