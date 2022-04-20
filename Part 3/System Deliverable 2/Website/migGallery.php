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
            <h1 class="galleryTitle">Motion in Gravitational Fields Image Gallery</h1>
            <h2 class="gallerySubTitle">Click on Images to View A Modal</h2>
            <div class="galleryRow">
                <div class="galleryColumn">
                    <img id="img1" onclick="openModal(this.src, this.alt)" alt="Newtons Thought Experiment Was Inspired by an Apple Falling on his Head" src="img/motion_in_gravity/img1.jpg">
                    <img id="img2" onclick="openModal(this.src, this.alt)" alt="Model of Earths Gravitation Field Strength" src="img/motion_in_gravity/img2.jpg">
                </div>
                <div class="galleryColumn">
                    <img id="img3" onclick="openModal(this.src, this.alt)" alt="Weight Comparisons on Different Planets" src="img/motion_in_gravity/img3.jpg">
                    <img id="img4" onclick="openModal(this.src, this.alt)" alt="Satellites are continuosly falling" src="img/motion_in_gravity/img4.jpg">
                </div>
                <div class="galleryColumn">
                    <img id="img5" onclick="openModal(this.src, this.alt)" alt="The ISS is Orbiting Earth in an Elliptical Orbit" src="img/motion_in_gravity/img5.jpg">
                    <img id="img6" onclick="openModal(this.src, this.alt)" alt="Three Geostationary Satellites (Seen as straight dots) as Seen From Earth"  src="img/motion_in_gravity/img6.jpg">
                </div>
                <div class="galleryColumn">
                    <img id="img7" onclick="openModal(this.src, this.alt)" alt="This Rockets KE is Depleting while its GPE is Increasing" src="img/motion_in_gravity/img7.jpg">
                    <img id="img8" onclick="openModal(this.src, this.alt)" alt="Escape Velocity Description" src="img/motion_in_gravity/img8.jpg">
                </div>
            </div>

            <!-- The Modal -->
            <div id="modal" class="modal">
                <span onclick="javascript:closeModal()" class="close">&times;</span>
                <img class="modal-content" src="img/motion_in_gravity/img1.jpg" alt="Motion in Gravitational Fields Image" id="modalImg">
                <div id="caption">Newtons Thought Experiment Was Inspired by an Apple Falling on his Head</div>
                <a class="prev" onclick="changeModalImage(-1, 8)">&#10094;</a>
                <a class="next" onclick="changeModalImage(1, 8)">&#10095;</a>
            </div>
        </maincontent>
        <?php require('footer.php'); ?>
    </body>
</html>