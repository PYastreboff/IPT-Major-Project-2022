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
                    <img onclick="openModal(this.src, this.alt)" alt="This Motorbike is Undergoing Projectile Motion" src="img/proj_motion/img1.jpg">
                    <img onclick="openModal(this.src, this.alt)" alt="This Basketball is Undergoing Projectile Motion" src="img/proj_motion/img2.jpg">
                </div>
                <div class="galleryColumn">
                    <img onclick="openModal(this.src, this.alt)" alt="This Basketball is Undergoing Projectile Motion" src="img/proj_motion/img3.jpg">
                    <img onclick="openModal(this.src, this.alt)" alt="A Cannon Fires a Projectile" src="img/proj_motion/img4.jpg">
                </div>
                <div class="galleryColumn">
                    <img onclick="openModal(this.src, this.alt)" alt="An Arrow Undergoes Projectile Motion" src="img/proj_motion/img5.jpg">
                    <img onclick="openModal(this.src, this.alt)" alt="An Javelin Undergoes Projectile Motion"  src="img/proj_motion/img6.jpg">
                </div>
                <div class="galleryColumn">
                    <img onclick="openModal(this.src, this.alt)" alt="A Freebody Diagram of a Projectile" src="img/proj_motion/img7.jpg">
                    <img onclick="openModal(this.src, this.alt)" alt="Even Water can undergo Projectile Motion" src="img/proj_motion/img8.jpg">
                </div>
            </div>

            <!-- The Modal -->
            <div id="modal" class="modal">
                <span onclick="javascript:closeModal()" class="close">&times;</span>
                <img class="modal-content" src="img/proj_motion/img8.jpg" id="modalImg">
                <div id="caption">Image Test</div>
            </div>

        </maincontent>
        <?php require('footer.php'); ?>
    </body>
</html>