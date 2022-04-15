<nav>
	<div class="topnav" id="myTopnav">
		<a href="index.php" class="active">Home</a>

		<div class="dropdown">
			<button class="dropbtn">
				Projectile Motion
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Info</a>
				<a href="#">Image Gallery</a>
				<a href="#">Video</a>
			</div>
		</div> 

		<div class="dropdown">
			<button class="dropbtn">
				Circular Motion
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Info</a>
				<a href="#">Image Gallery</a>
				<a href="#">Video</a>
			</div>
		</div> 

		<div class="dropdown">
			<button class="dropbtn">
				Motion in Gravity
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Info</a>
				<a href="#">Image Gallery</a>
				<a href="#">Video</a>
			</div>
		</div> 

		<div class="dropdown">
			<button class="dropbtn">
				Summary
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="#">Quiz</a>
				<a href="#">Video</a>
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