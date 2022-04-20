<?php
require("sessionCheck.php");

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

$message = "Answer the quiz question and try you luck!";
$quizLength = sizeof($correctAnswers);

$messages = array();   //message for each question

//initialise message for each answer the first time through
FOR ($x=0; $x< $quizLength; $x++) {
	array_push($messages, "Choose an option");
}

//now decide what to do
$method = $_SERVER["REQUEST_METHOD"];  //First time is GET, submit is POST

//If the Submit button is pressed - then method is POST
IF ($method == "POST") {
	//First get answers from $_POST memory
	$answers = getAnswers($quizLength);
	
	// Check the answers against the correct answers list and return messages
	list($messages, $message) = checkQuiz($quizLength,$answers,$correctAnswers);
}

// ========================== USEFUL FUNCTIONS =====================================
// Get answers for quiz
FUNCTION getAnswers($quizLength) {
	// Create an empty answers array
	$answers = array();
	
	for ($x=1; $x<= $quizLength; $x++) {
		$q = "q".$x;
		// Get answers entered by user for each question q1, q2 etc and store in Answers Array.
		$answers[$q] = $_POST[$q];
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
			$messages[$x] = "Question ".$n.": Your answer (".$answers[$q].") is correct!";
			$total++;
		} else {
			$messages[$x] = "Question ".$n.": Your answer (".$answers[$q].") is incorrect! Should have been: ".$correctAnswers[$q];
		}
	}
	$message = "You got ".$total." correct out of ".$quizLength;
	return array($messages,$message);
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
			<h1>Quiz Page</h1>
			<h2>A Summary Quiz on Advanced Mechanics</h2>
			<?php $i=0; ?>
			<form name="quiz" action="" method="POST">
				<table class="quizTitle">
					<tr>
						<td><h3 class="questionTitle">Q1. What does "UCM" stand for?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q1" id="q1a" value="A">Uniform Circular Motion</input></li>
								<li><input type="radio" name="q1" id="q1b" value="B">User Communication Manager</input></li>
								<li><input type="radio" name="q1" id="q1c" value="C">Universal Content Management</input></li>
								<li><input type="radio" name="q1" id="q1d" value="D">Universal Call Model</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q2. How many components does projectile motion have?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q2" id="q2a" value="A">0</input></li>
								<li><input type="radio" name="q2" id="q2b" value="B">1</input></li>
								<li><input type="radio" name="q2" id="q2c" value="C">2</input></li>
								<li><input type="radio" name="q2" id="q2d" value="D">10</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q3. Acceleration due to gravity on Earth is Approximately?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q3" id="q3a" value="A">2 m/s</input></li>
								<li><input type="radio" name="q3" id="q3b" value="B">9.8 m/s</input></li>
								<li><input type="radio" name="q3" id="q3c" value="C">3.2 m/s</input></li>
								<li><input type="radio" name="q3" id="q3d" value="D">11 m/s</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>
					
					<tr>
						<td><h3 class="questionTitle">Q4. Does direction matter in Escape Velocity?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q4" id="q4a" value="A">Uh, Duh?</input></li>
								<li><input type="radio" name="q4" id="q4b" value="B">100%</input></li>
								<li><input type="radio" name="q4" id="q4c" value="C">Yes</input></li>
								<li><input type="radio" name="q4" id="q4d" value="D">No</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q5. What is the formula for GPE in a constant Graviational Field?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q5" id="q5a" value="A">M = -gm</input></li>
								<li><input type="radio" name="q5" id="q5b" value="B">h = gMm</input></li>
								<li><input type="radio" name="q5" id="q5c" value="C">g = ugm</input></li>
								<li><input type="radio" name="q5" id="q5d" value="D">U = mgh</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q6. Who's thought experiment is studied in this unit?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q6" id="q6a" value="A">Isaac Newton's</input></li>
								<li><input type="radio" name="q6" id="q6b" value="B">Albert Einstein's</input></li>
								<li><input type="radio" name="q6" id="q6c" value="C">Marie Curie's</input></li>
								<li><input type="radio" name="q6" id="q6d" value="D">Nikola Tesla's</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q7. What is an example of circular motion?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q7" id="q7a" value="A">A car on a straight road</input></li>
								<li><input type="radio" name="q7" id="q7b" value="B">Typing on a keyboard</input></li>
								<li><input type="radio" name="q7" id="q7c" value="C">Playing Guitar</input></li>
								<li><input type="radio" name="q7" id="q7d" value="D">Going on a Ferris-Wheel</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q8. Kepler made how many laws?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q8" id="q8a" value="A">1</input></li>
								<li><input type="radio" name="q8" id="q8b" value="B">3</input></li>
								<li><input type="radio" name="q8" id="q8c" value="C">5</input></li>
								<li><input type="radio" name="q8" id="q8d" value="D">7</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q9. How are period and frequency related?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q9" id="q9a" value="A">f= <sup>1</sup>/<sub>T</sub> formula</input></li>
								<li><input type="radio" name="q9" id="q9b" value="B">They aren't</input></li>
								<li><input type="radio" name="q9" id="q9c" value="C">Not enough information to tell</input></li>
								<li><input type="radio" name="q9"9id="q9d" value="D">They might be</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr>
						<td><h3 class="questionTitle">Q10. Orbits have what shape?</h3></td>
					</tr>
					<tr><td><ol type="A" class="radioBox">
								<li><input type="radio" name="q10" id="q10a" value="A">Circle</input></li>
								<li><input type="radio" name="q10" id="q10b" value="B">Square</input></li>
								<li><input type="radio" name="q10" id="q10c" value="C">Rhombus</input></li>
								<li><input type="radio" name="q10" id="q10d" value="D">Elipse</input></li>
							</ol></td>
					</tr>
					<tr><td><?php echo($messages[$i++]); ?></td></tr>

					<tr><td><button type="submit" name="quizSubmit">Submit Answers</td></tr>
				</table>	
			</form>
			<h3><?php echo($message); ?></h3>
		</maincontent>
		<?php require('footer.php'); ?>
	</body>
</html>