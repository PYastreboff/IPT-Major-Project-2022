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
			<h1 class="videoTitle">Projectile Motion Video</h1>
			<div class="videoContainer">
                <iframe class="responsive-iframe" width="878" height="494" src="https://www.youtube.com/embed/6IPQ4UpGxws" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
		</maincontent>
		<?php require('footer.php'); ?>
		</body>
</html>