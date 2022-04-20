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
            <h1 class="galleryTitle">Circular Motion Image Gallery</h1>
            <h2 class="gallerySubTitle">Click on Images to View A Modal</h2>
            <div class="galleryRow">
                <div class="galleryColumn">
                    <img id="img1" onclick="openModal(this.src, this.alt)" alt="Ferris Wheels Undergo Circular Motion" src="img/circular_motion/img1.jpg">
                    <img id="img2" onclick="openModal(this.src, this.alt)" alt="Planets Undergo Circlar Motion" src="img/circular_motion/img2.jpg">
                </div>
                <div class="galleryColumn">
                    <img id="img3" onclick="openModal(this.src, this.alt)" alt="This Ride Undergoes Circular Motion" src="img/circular_motion/img3.jpg">
                    <img id="img4" onclick="openModal(this.src, this.alt)" alt="A Rollercoaster Doing a Loop-the-Loop Undergoes Circular Motion" src="img/circular_motion/img4.jpg">
                </div>
                <div class="galleryColumn">
                    <img id="img5" onclick="openModal(this.src, this.alt)" alt="The Forces on a Particle Undergoing UCM" src="img/circular_motion/img5.jpg">
                    <img id="img6" onclick="openModal(this.src, this.alt)" alt="Participants of Ferris Wheels Undergo Circular Motion"  src="img/circular_motion/img6.jpg">
                </div>
                <div class="galleryColumn">
                    <img id="img7" onclick="openModal(this.src, this.alt)" alt="Cars Undergo Circular Motion on Roundabouts" src="img/circular_motion/img7.jpg">
                    <img id="img8" onclick="openModal(this.src, this.alt)" alt="This Man is Applying a Force Causing UCM" src="img/circular_motion/img8.jpg">
                </div>
            </div>

            <!-- The Modal -->
            <div id="modal" class="modal">
                <span onclick="javascript:closeModal()" class="close">&times;</span>
                <img class="modal-content" src="img/circular_motion/img1.jpg" alt="Circular Motion Image" id="modalImg">
                <div id="caption">Ferris Wheels Undergo Circular Motion</div>
                <a class="prev" onclick="changeModalImage(-1, 8)">&#10094;</a>
                <a class="next" onclick="changeModalImage(1, 8)">&#10095;</a>
            </div>
        </maincontent>
        <?php require('footer.php'); ?>
    </body>
</html>