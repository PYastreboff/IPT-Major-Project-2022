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
			<h1 class="videoTitle">Circular Motion Video</h1>
			<div class="videoContainer">
                <iframe width="878" height="494" src="https://www.youtube.com/embed/SZj6DuB0vvo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
		</maincontent>
		<?php require('footer.php'); ?>
		</body>
</html>