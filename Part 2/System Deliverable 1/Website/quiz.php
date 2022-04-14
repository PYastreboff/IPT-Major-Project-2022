<?php
	require("sessionCheck.php");
	
	// >>>>>> AMEND THIS LIST TO INCLUDE CORRECT ANSWERS FOR YOUR QUIZ 
	// >>>>>> THEN ADD MORE QUESTIONS AND M/C Anwer options in HTML section belowl
	
	$correctAnswers = array("q1"=>"A");
	
	$message = "Answer the quiz question and try you luck!";
	$quizLength = sizeof($correctAnswers);

	$messages = array();   //message for each question

	//initialise message for each answer the first time through
	FOR ($x=0; $x< $quizLength; $x++) {
		array_push($messages, "Choose an option");
	}

	//now decide what to do
	$method= $_SERVER["REQUEST_METHOD"];  //First time is GET, submit is POST

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
			
			if ($answers[$q]==$correctAnswers[$q]) {
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
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Teddy Bears R Us - Quiz page</title>
        <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Load Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
        
        <!-- This is MY stylesheet - it comes last -->
        <link rel="stylesheet" href="css/teddys.css"
	</head>
	<body>
<?php
	require('header.php');
	require('nav.php');
?>
	<maincontent>
	<h1>Quiz Page</h1>
	<h2>Welcome to my Teddy bears Quiz</h2>
	<?php $i=0; ?>
	<form name="quiz" action="" method="post">
	<table>
		<tr>
			<td><h3>Q1. Why did the teddy bears go into the woods today?</h3></td>
		</tr>
		<tr><td><ol type="A">
					<li><input type="radio" name="q1" id="q1a" value="A">To have a picnic</input></li>
					<li><input type="radio" name="q1" id="q1b" value="B">To have a rave</input></li>
					<li><input type="radio" name="q1" id="q1c" value="C">To meditate</input></li>
					<li><input type="radio" name="q1" id="q1d" value="D">To catch the Forest bus</input></li>
				</ol></td>
		</tr>
		<tr><td><?php echo($messages[$i++]); ?></td></tr>
		<tr><td><button type="submit" name="quizSubmit">Try this sucker!</td></tr>
	</table>
	</form>
	<h3><?php echo($message); ?></h3>
	</maincontent>
	<?php require('footer.php'); ?>
	
	</body>
</html>