<?php
require("sessionCheck.php"); // check session exists, else log out

$correctAnswers = array("q1"=>"A",
						"q2"=>"C",
						"q3"=>"B",
						"q4"=>"D",
						"q5"=>"D",
						"q6"=>"A",
						"q7"=>"D",
						"q8"=>"B",
						"q9"=>"A",
						"q10"=>"D"
						); // Array of all correct answers

$message = "Answer the Quiz Questions to Test Your Knowledge!";
$quizLength = sizeof($correctAnswers);

$messages = array();   //message for each question

//initialise message for each answer the first time through
FOR ($x=0; $x< $quizLength; $x++) {
	array_push($messages, "");
}

//now decide what to do
$method = $_SERVER["REQUEST_METHOD"];  //First time is GET, submit is POST

//If the Submit button is pressed - then method is POST
IF ($method == "POST") {
	//First get answers from $_POST memory
	$answers = getAnswers($quizLength);
	
	// Check the answers against the correct answers list and return messages
	list($messages, $message) = checkQuiz($quizLength, $answers, $correctAnswers);
}

// ========================== USEFUL FUNCTIONS =====================================
// Get answers for quiz
FUNCTION getAnswers($quizLength) {
	// Create an empty answers array
	$answers = array();
	
	for ($x=1; $x<= $quizLength; $x++) {
		$q = "q".$x;
		// Get answers entered by user for each question q1, q2 etc and store in Answers Array.
		if (isset($_POST[$q])) {
			$answers[$q] = $_POST[$q];
		} else {
			$answers[$q] = "-1";
		}
		
	}
	return $answers;
}

//Check the $answers (from screen) with $answerList - correct
FUNCTION checkQuiz($quizLength,$answers,$correctAnswers) {
	$messages = array();
	$total = 0;
	for ($x=0; $x< $quizLength; $x++) {
		$n = $x + 1;
		$q = "q".$n; //q1
		
		if ($answers[$q] == $correctAnswers[$q]) {
			$messages[$x] = '<h1 class="correct mark">&#10003; Question '.$n.': Your answer ('.$answers[$q].') is correct!</h1>';
			$total++;
		} else if ($answers[$q] == "-1") {
			$messages[$x] = '<h1 class="incorrect mark">&#10005; Question '.$n.': Null Answer</h1>';
		} else {
			$messages[$x] = '<h1 class="incorrect mark">&#10005; Question '.$n.': Your answer ('.$answers[$q].') is incorrect! Should have been: '.$correctAnswers[$q].'</h1>';
		}
	}
	$message = "You got ".$total." correct out of ".$quizLength;
	return array($messages, $message);
}
?>
<!DOCTYPE html>
<html>
	<?php require('head.php') ?>
	<body>
		<?php
			require('header.php');
			require('nav.php');
		?>
		<maincontent>
			<h1 class="quizMainTitle">SPX Physics Online Quiz Page</h1>
			<h2c class="quizSubTitle">A Summary Quiz on Advanced Mechanics</h2>
			<?php $i=0; ?>
			<form name="quiz" action="" method="POST">
				<table class="quizTable">
					<tr>
						<td><h3 class="questionTitle">Q1. What does "UCM" stand for?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q1" id="q1a" value="A"></input>
						<label for="q1a">A - Uniform Circular Motion</label>

						<input type="radio" name="q1" id="q1b" value="B"></input>
						<label for="q1b">B - User Communication Manager</label>

						<input type="radio" name="q1" id="q1c" value="C"></input>
						<label for="q1c">C - Universal Content Management</label>

						<input type="radio" name="q1" id="q1d" value="D"></input>
						<label for="q1d">D - Universal Content Management</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>


					<tr>
						<td><h3 class="questionTitle">Q2. How many components does projectile motion have?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q2" id="q2a" value="A"></input>
						<label for="q2a">A - 0</label>

						<input type="radio" name="q2" id="q2b" value="B"></input>
						<label for="q2b">B - 1</label>

						<input type="radio" name="q2" id="q2c" value="C"></input>
						<label for="q2c">C - 2</label>

						<input type="radio" name="q2" id="q2d" value="D"></input>
						<label for="q2d">D - 10</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q3. Acceleration due to gravity on Earth is Approximately?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q3" id="q3a" value="A"></input>
						<label for="q3a">A - 2 m/s</label>

						<input type="radio" name="q3" id="q3b" value="B"></input>
						<label for="q3b">B - 9.8 m/s</label>

						<input type="radio" name="q3" id="q3c" value="C"></input>
						<label for="q3c">C - 3.2 m/s</label>

						<input type="radio" name="q3" id="q3d" value="D"></input>
						<label for="q3d">D - 11 m/s</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>
					
					<tr>
						<td><h3 class="questionTitle">Q4. Does direction matter in Escape Velocity?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q4" id="q4a" value="A"></input>
						<label for="q4a">A - Uh, Duh?</label>

						<input type="radio" name="q4" id="q4b" value="B"></input>
						<label for="q4b">B - 100%</label>

						<input type="radio" name="q4" id="q4c" value="C"></input>
						<label for="q4c">C - Yes</label>

						<input type="radio" name="q4" id="q4d" value="D"></input>
						<label for="q4d">D - No</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q5. What is the formula for GPE in a constant Graviational Field?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q5" id="q5a" value="A"></input>
						<label for="q5a">A - M = -gm</label>

						<input type="radio" name="q5" id="q5b" value="B"></input>
						<label for="q5b">B - h = gMm</label>

						<input type="radio" name="q5" id="q5c" value="C"></input>
						<label for="q5c">C - g = ugm</label>

						<input type="radio" name="q5" id="q5d" value="D"></input>
						<label for="q5d">D - U = mgh</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q6. Who's thought experiment is studied in this unit?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q6" id="q6a" value="A"></input>
						<label for="q6a">A - Isaac Newton's</label>

						<input type="radio" name="q6" id="q6b" value="B"></input>
						<label for="q6b">B - Albert Einstein's</label>

						<input type="radio" name="q6" id="q6c" value="C"></input>
						<label for="q6c">C - Marie Curie's</label>

						<input type="radio" name="q6" id="q6d" value="D"></input>
						<label for="q6d">D - Nikola Tesla's</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q7. What is an example of circular motion?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q7" id="q7a" value="A"></input>
						<label for="q7a">A - A car on a straight road</label>

						<input type="radio" name="q7" id="q7b" value="B"></input>
						<label for="q7b">B - Typing on a keyboard</label>

						<input type="radio" name="q7" id="q7c" value="C"></input>
						<label for="q7c">C - Playing Guitar</label>

						<input type="radio" name="q7" id="q7d" value="D"></input>
						<label for="q7d">D - Going on a Ferris-Wheel</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>
					
					<tr>
						<td><h3 class="questionTitle">Q8. Kepler made how many laws?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q8" id="q8a" value="A"></input>
						<label for="q8a">A - 1</label>

						<input type="radio" name="q8" id="q8b" value="B"></input>
						<label for="q8b">B - 3</label>

						<input type="radio" name="q8" id="q8c" value="C"></input>
						<label for="q8c">C - 5</label>

						<input type="radio" name="q8" id="q8d" value="D"></input>
						<label for="q8d">D - 7</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q9. How are period and frequency related?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q9" id="q9a" value="A"></input>
						<label for="q9a">A - f = 1/T formula</label>

						<input type="radio" name="q9" id="q9b" value="B"></input>
						<label for="q9b">B - They aren't</label>

						<input type="radio" name="q9" id="q9c" value="C"></input>
						<label for="q9c">C - Not enough information to tell</label>

						<input type="radio" name="q9" id="q9d" value="D"></input>
						<label for="q9d">D - They might be</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q10. Orbits have what shape?</h3></td>
					</tr>
					<tr><td><div class="answersBox">
						<input type="radio" name="q10" id="q10a" value="A"></input>
						<label for="q10a">A - Circle</label>

						<input type="radio" name="q10" id="q10b" value="B"></input>
						<label for="q10b">B - Square</label>

						<input type="radio" name="q10" id="q10c" value="C"></input>
						<label for="q10c">C - Rhombus</label>

						<input type="radio" name="q10" id="q10d" value="D"></input>
						<label for="q10d">D - Elipse</label>
						</div></td>
					</tr>
					<tr><td class="markMessage"><?php echo($messages[$i++]); ?></td></tr>

					<tr><td><button class="quizSubmit" onclick="" type="submit" name="quizSubmit">Submit Answers</td></tr>
					<tr><td><button class="quizReset" onclick="resetQuiz()" type="reset" name="quizReset">Reset Quiz</td></tr>
				</table>	
			</form>
			<h3 id="qr" class="quizResult"><?php echo($message); ?></h3>
		</maincontent>
		<?php require('footer.php'); ?>
	</body>
</html>