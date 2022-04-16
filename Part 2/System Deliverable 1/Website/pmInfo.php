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
            <div class="title">Projectile Motion</div>
            <div class="subTitle">Projectiles Launched Horizontally</div>
            <div class="info">
                A projectile is any object that is thrown or projected into the air and is moving 
                freely - that is, it has no power source (such as a rocket engine or propeller) 
                driving it. A netball as it is passed, a cricket ball that is hit for six and an aerial 
                skier flying through the air are all examples of projectiles.
            </div>
            <div class="info">
                It is a very common misconception that when a projectile travels through
                the air, it has a forward force acting on it, but this is incorrect. There might have 
                been some forward force acting as the projectile is launched, but once the projectile 
                is released, this forward force is no longer acting. This causes the projectile to 
                continually deviate from a straight-line path 10 follow a parabolic path. 
                The only force acting on a projectile during its flight is its weight, which is the 
                force due 10 gravity, Fg = mg. This force is constant and always directed vertically 
                downwards. This motion is known as free fall. Given that the o nly force acting 
                on a projectile is the force due to gravity, it follows that a projectile near the 
                surface of the Earth must have a vertical acceleration of 9.8m/s/s downwards 
                throughout its motion. The mass of the projectile does not affect its acceleration 
                due to gravity.
            </div>
            <div class="subTitle">Projectiles Launched Obliquely</div>
            <div class="info">
                As with projectiles launched horizontally, if air resistance is ignored, the only force that 
                is acting on a projectile is gravity. Gravity acts vertically downwards, so it has no effect 
                on the horizontal motion of a projectile. The vertical and horizontal components of 
                the motion are independent of each other and once again must be treated separately.
            </div>
            <div class="info">
                The equations of motion for uniform acceleration are:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>v = u+at</h1></div>
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>s = <sup>1</sup>/<sub>2</sub>(u+v)t</h1></div>
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>s = ut+<sup>1</sup>/<sub>2</sub>at<sup>2</sup></h1></div>
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>v<sup>2</sup> = u<sup>2</sup>+2as</h1></div>
                <h2>Where:</h2>
                <h3><b>v</b> is final velocity</h3>
                <h3><b>u</b> is initial velocity</h3>
                <h3><b>a</b> is acceleration</h3>
                <h3><b>t</b> is time</h3>
                <h3><b>s</b> is displacement</h3>
            </div>
            <div class="info">
                For a projectile launched at an angle to the horizontal, trigonometry can be used 
                to find the initial horizontal and vertical components of it's velocity. Pythagoras' 
                theorem can be used to determine the actual velocity of the projectile at any point, 
                as well as its direction with respect to the horizontal plane.
            </div>
		</maincontent>
		<?php require('footer.php'); ?>
		</body>
</html>