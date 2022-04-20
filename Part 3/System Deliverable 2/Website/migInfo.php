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
            <div class="title">Motion In Gravitional Fields</div>
            <div class="subTitle">Newtons Law of Universal Gravitation</div>
            <div class="info">
                Newton's law of universal gravitation is 
                significant because, for the first time in history, it scientifically explained 
                the motion of the planets. This led to a change in humanity's understanding of its 
                place in the universe. 
            </div>
            <div class="info">
                Newton's law of universal gravitation states that any two bodies in the universe 
                attract each other with a force that is directly proportional to the product of their 
                masses and inversely proportional to the square of the distance between them
            </div>
            <div class="info">
                Mathematically, Newton's law of universal gravitation can be expressed as:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>f = <sup>GMm</sup>/<sub>r<sup>2</sup></sub></h1></div>
                <h2>Where:</h2>
                <h3><b>F</b> is graitational force</h3>
                <h3><b>M</b> is the mass of object 1</h3>
                <h3><b>m</b> is is the mass of object 2</h3>
                <h3><b>r</b> is the distance between the centres of object 1 and 2</h3>
                <h3><b>G</b> is the gravitational constant (6.67 x 10<sup>-11</sup>)</h3>
            </div>
            <div class="info">
                The gravitational force is always an attractive force. The gravitational constant, 
                G, was first accurately measured by the British scientist Henry Cavendish in 1798, 
                over a century after Newton's death. As its name suggests, the law of universal 
                gravitation predicts that any two objects that have mass will attract each other. 
                However, because the value of G is so small, the gravitational force between two 
                everyday objects is too small to be noticed.
            </div>
            <div class="info">
                The fact that r appears in the denominator of Newton's law o f universal 
                gravitation indicates an inverse relationship. Since r is also squared, this relationship 
                is known as an inverse square law. The implication is that as r increases, F 
                will decrease dramatically.
            </div>
            <div class="subTitle">Gravitational Field Strength</div>
            <div class="info">
                Gravitational Field Strength is given in the following formula:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>g = <sup>GM</sup>/<sub>r<sup>2</sup></sub></h1></div>
                <h2>Where:</h2>
                <h3><b>g</b> is graitational field strength</h3>
                <h3><b>M</b> is the mass of the object in the field</h3>
                <h3><b>G</b> is the gravitational constant (6.67 x 10<sup>-11</sup>)</h3>
                <h3><b>r</b> is the radius from the center of object M</h3>        
            </div>
            <div class="subTitle">Satellite Motion</div>
            <div class="info">
                A satellite is an object in a stable orbit around another object. Isaac Newton 
                developed the notion of satellite motion while working on his theory of gravitation. 
                He was comparing the motion of the Moon with the motion of a falling apple 
                and realised that it was the gravitational force of attraction towards the Earth that 
                determined the motion of both objects. He reasoned that if this force 
                of gravity was not acting on the Moon, the Moon would move at constant speed in 
                a straight line at a tangent to its orbit. 
            </div>
            <div class="subTitle">Keplers Laws</div>
            <div class="info">
                <ul>
                    <li>The planets move in elliptical orbits, with the Sun at one focus.</li>
                    <li>The line connecting a planet to the Sun sweeps out equal areas in equal intervals of time.</li>
                    <li>For every planet, the ratio of the cube of the average orbital radius, r, to the square of the period, T, of revolution is the same.</li>
                </ul>
            </div>
            <div class="subTitle">Calculating the Orbital Properties of Satellites</div>
            <div class="info">
                The speed, v, of a satellite can be calculated from its motion for one revolution. For 
                simplicity, we will assume that the orbital paths are approximately circular. This 
                means that a satellite will travel a distance equal to the circumference of the orbit, 
                2πr, in the time of one period, T.
            </div>
            <div class="info">
                The speed, v, of a satellite in a circular orbit is given by:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>v = <sup>distance</sup>/<sub>time</sub> = <sup>2πr</sup>/<sub>T</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>r</b> is radius of orbit</h3>
                <h3><b>T</b> is period of orbit</h3>   
            </div>
            <div class="info">
                Since the centripetal acceleration of the satellite is equal to the gravitational 
                field strength at the location of its orbit, and using the gravitational field strength 
                equation from earlier, we can give the following expression. 
            </div>
            <div class="info">
                The centripetal acceleration, a, of a satellite in circular orbit is given by:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>a = <sup>v<sup>2</sup></sup>/<sub>r</sub> = <sup>4π<sup>2</sup>r</sup>/<sub>T<sup>2</sup></sub> = <sup>GM</sup>/<sub>r<sup>2</sup></sub> = g</h1></div>
                <h2>Where:</h2>
                <h3><b>v</b> is speed of the satellite</h3>
                <h3><b>r</b> is radius of orbit</h3>
                <h3><b>T</b> is period of orbit</h3>
                <h3><b>M</b> is the central mass</h3>
                <h3><b>g</b> is the gravitational field strength at r</h3>
                <h3><b>G</b> is the gravitational constant (6.67 x 10<sup>-11</sup>)</h3>
            </div>
            <div class="subTitle">Gravitation Potential Energy In a Constant Gravitational Field</div>
            <div class="info">
                The gravitational potential energy of an obiect, U, is 
                direct1y proportional to the mass of the object, m, its height above the surface of the 
                planet, h, and the strength of the gravitational field, g. 
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>U = mgh</h1></div>
                <h2>Where:</h2>
                <h3><b>U</b> is the gravitational potential energy of an object</h3>
                <h3><b>m</b> is mass of the objetc</h3>
                <h3><b>g</b> is gravitational field strength (9.8 on Earth)</h3>
                <h3><b>h</b> is the height of teh object</h3>
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>K = <sup>1</sup>/<sub>2</sub>mv<sup>2</sup></h1></div>
                <h2>Where:</h2>
                <h3><b>K</b> is kinetic energy of an object</h3>
                <h3><b>m</b> is mass of the objetc</h3>
                <h3><b>v</b> is speed of the object</h3>
            </div>
            <div class="subTitle">Gravitation Potential Energy in a Non-Constant Gravitational Field</div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>U = <sup>-GMm</sup>/<sub>r</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>U</b> is the gravitational potential energy of an object</h3>
                <h3><b>m</b> is mass of the objetc</h3>
                <h3><b>M</b> is the central mass</h3>
                <h3><b>G</b> is the gravitational constant (6.67 x 10<sup>-11</sup>)</h3>
                <h3><b>r</b> is radius of orbit</h3>
            </div>
            <div class="info">
                Note that this formula contains a negative sign. Gravitational potential energy 
                is measured against a reference level and a negative means that it has moved 
                below this level. By convention, the gravitational potential energy of a satellite 
                is considered to be zero when it has escaped the gravitational field of the Earth. 
                This only occurs when the satellite is a very large distance away (in theory, an 
                infinite distance). As the satellite moves closer to the Earth, its distance from the 
                Earth becomes less than the reference level and the potential energy of the satellite 
                becomes a negative value. 
            </div>
            <div class="subTitle">Total Energy in a Non-Constant Gravitational Field</div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>E = K + U = -<sup>GMm</sup>/<sub>2r</sub></h1></div>
                <h2>Where:</h2>
                <h3><b>E</b> is the total energy of an object</h3>
                <h3><b>K</b> is kinetic energy of the object</h3>
                <h3><b>U</b> is the potential energy of an object</h3>
                <h3><b>M</b> is the central mass</h3>
                <h3><b>m</b> is mass of the object</h3>
                <h3><b>G</b> is the gravitational constant (6.67 x 10<sup>-11</sup>)</h3>
                <h3><b>r</b> is radius of orbit</h3>
            </div>
            <div class="subTitle">Escape Velocity</div>
            <div class="info">
                The escape velocity is given by the equation:
            </div>
            <div class="formulaBox">
                <div class="formulaRow"><img src="img/info_icon.png"/><h1>v = <b>&radic;</b>(<sup>2GM</sup>/<sub>r</sub>)</h1></div>
                <h2>Where:</h2>
                <h3><b>v</b> is escape velocity</h3>
                <h3><b>M</b> is the central mass</h3>
                <h3><b>G</b> is the gravitational constant (6.67 x 10<sup>-11</sup>)</h3>
                <h3><b>r</b> is radius of orbit</h3>
            </div>
		</maincontent>
		<?php require('footer.php'); ?>
		</body>
</html>