<?php
	require("sessionCheck.php");
?>
<!DOCTYPE html>
<html>
	<?php require('head.php'); ?>
	<body>
		<?php
			require('header.php');
			require('nav.php');
		?>
		<maincontent>
			<div class="homeContent">
				<h1>SPX Physics Online Home Page</h1>
				<h2>Welcome to SPX Physics Online, <?php echo($_SESSION["firstName"]." ".$_SESSION["lastName"]); ?></h2>
				<p>This website will help you revise/learn for the content in the HSC Physics <b>Advanced Mechanics</b> Unit.</p>
				<p>This includes the subtopics of:</p>
				<ul>
					<li><a href="pmInfo.php">Projectile Motion</a></li>
					<li><a href="cmInfo.php">Circular Motion</a></li>
					<li><a href="migInfo.php">Motion In a Gravitational Field (Motion In Gravity)</a></li>
				</ul>
				<p>A Summary of Advanced Mechanics is also included:</p>
				<ul>
					<li><a href="summaryVideo.php">Summary</a></li>
				</ul>
				<p>
					Motion in one dimension at constant velocity or constant acceleration can be 
					explained and analysed relatively simply. However, motion is frequently more 
					complicated because the net force on objects can vary in size and direction, 
					causing objects to move in two or three dimensions. 
					In this website, you will develop an understanding that all forms of complex 
					motion can be understood by analysing the forces acting on a system, including 
					the energy transformations taking place within and around the system. By 
					applying new mathematical techniques, you will model and predict the motion 
					of objects within systems. You will examine two-dimensional motion, including 
					projectile motion and uniform circular motion, along with the orbital motion 
					of planets and satellites, which are modelled as an approximation to uniform 
					circular motion.
				</p>
			</div>
		</maincontent>
		<?php require('footer.php'); ?>
		</body>
</html>