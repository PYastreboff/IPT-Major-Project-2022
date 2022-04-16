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
            <div class="galleryRow">
                <div class="galleryColumn">
                    <img src="img/proj_motion/img1.jpg">
                    <img src="img/proj_motion/img2.jpg">
                </div>
                <div class="galleryColumn">
                    <img src="img/proj_motion/img3.jpg">
                    <img src="img/proj_motion/img4.jpg">
                </div>
                <div class="galleryColumn">
                    <img src="img/proj_motion/img5.jpg">
                    <img src="img/proj_motion/img6.jpg">
                </div>
                <div class="galleryColumn">
                    <img src="img/proj_motion/img7.jpg">
                    <img src="img/proj_motion/img8.jpg">
                </div>
            </div>
        </maincontent>
        <?php require('footer.php'); ?>
    </body>
</html>