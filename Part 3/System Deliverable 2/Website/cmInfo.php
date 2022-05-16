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
            <div class="title">Circular Motion</div>
            <div class="info">
                A Particle undergoing Uniform Circular Motion or UCM always has velocity tangential to the path of the motion.
                Therefore the particle is accelerating as its velocity is changing, however its speed is always constant.
            </div>
            <div class="subTitle">Period and Frequency of a Particle in UCM</div>
            <div class="info">
                The time 
                required to travel once around the circle is called the period, T, of the motion. The 
                number of rotations each second is the frequency, f.
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>f = <sup>1</sup>/<sub>T</sub></h1></div>
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>T = <sup>1</sup>/<sub>f</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>T</b> is the Period of the Particle</h3>
                <h3><b>f</b> is the Frequency of the Particle</h3>
            </div>
            <div class="subTitle">Speed</div>
            <div class="info">
                The average speed of an object moving in a circular path is:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>v = <sup>2πr</sup>/<sub>T</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>fv</b> is the instantaneous Speed of the Particle</h3>
                <h3><b>T</b> is the Period of the Particle</h3>
                <h3><b>r</b> is the Radius of the Particle's Path</h3>
            </div>
            <div class="subTitle">Angular Velocity</div>
            <div class="info">
                When objects travel in circular paths it can be convenient to measure the angle of 
                rotation in a given time. The angular velocity, ω (Greek symbol omega), of an 
                object travelling through an angle θ in a period of time, t, can be calculated using 
                the following equation:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>ω = <sup>Δθ</sup>/<sub>t</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>ω</b> is angular velocity</h3>
                <h3><b>Δθ</b> is the change in angle</h3>
                <h3><b>t</b> is time</h3>
            </div>
            <div class="subTitle">Centripetal Acceleration</div>
            <div class="info">
                Since the velocity of the object is changing, it is accelerating even though its 
                speed is not changing. The object is continually deviating inwards from its straight line direction and so has an acceleration towards the centre of its motion. This 
                acceleration is known as centripetal acceleration, a, The velocity 
                vector of an object travelling in a circular path is shown with an arrow labelled v. 
                It is always at a tangent to the circular path. Therefore, the acceleration is always towards 
                the centre of the circular path.
            </div>
            <div class="info">
                Centripetal acceleration is always directed towards the centre of the circular path and is given by:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>a = <sup>v<sup>2</sup></sup>/<sub>r</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>a</b> is centripedal acceleration</h3>
                <h3><b>v</b> is velocity</h3>
                <h3><b>r</b> is the radius of the particles path</h3>
            </div>
            <div class="subTitle">Centripedal Force</div>
            <div class="info">
                In every case of circular motion, a real force is necessary to provide the 
                centripetal force. This force acts in the same direction as the acceleration, that 
                is, towards the centre of the circle created by the path of motion.
            </div>
            <div class="info">
                The centripedal force can then be found using Newton's second law, F = ma, 
                and substituting in the centripetal acceleration. Centripetal force is given by:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>F = <sup>mv<sup>2</sup></sup>/<sub>r</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>F</b> is centripedal force</h3>
                <h3><b>m</b> is mass</h3>
                <h3><b>v</b> is velocity</h3>
                <h3><b>r</b> is the radius of the particles path</h3>
            </div>
		</maincontent>
		<?php require('footer.php'); ?>
		</body>
</html>