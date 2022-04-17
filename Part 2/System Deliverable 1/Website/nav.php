

<nav>
	<div class="topnav" id="myTopnav">
		<a href="index.php" class="active">Home</a>

		<div class="dropdown">
			<button class="dropbtn">
				Projectile Motion
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="pminfo.php">Text Info</a>
				<a href="pmGallery.php">Image Gallery</a>
				<a href="pmVideo.php">Video</a>
			</div>
		</div> 

		<div class="dropdown">
			<button class="dropbtn">
				Circular Motion
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="cmInfo.php">Text Info</a>
				<a href="cmGallery.php">Image Gallery</a>
				<a href="cmVideo.php">Video</a>
			</div>
		</div> 

		<div class="dropdown">
			<button class="dropbtn">
				Motion in Gravity
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="comingSoon.php">TextInfo</a>
				<a href="comingSoon.php">Image Gallery</a>
				<a href="comingSoon.php">Video</a>
			</div>
		</div> 

		<div class="dropdown">
			<button class="dropbtn">
				Summary
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="comingSoon.php">Quiz</a>
				<a href="comingSoon.php">Video</a>
			</div>
		</div>

		<a href="login.php">Logout</a>

		<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="changeNav()">&#9776;</a>
	</div>
</nav>

<script>
	function changeNav() {
		var x = document.getElementById("myTopnav");
		if (x.className === "topnav") {
			x.className += " responsive";
		} else {
			x.className = "topnav";
		}
	}
</script>