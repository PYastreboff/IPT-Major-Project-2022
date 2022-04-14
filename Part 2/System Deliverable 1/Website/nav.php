<nav>
	<div class="topnav" id="myTopnav">
		<a href="index.php">Home</a>
		<a href="gallery.php">Gallery</a>
		<a href="login.php">Logout</a>
		<a href="quiz.php">Quiz</a>
		<a href="javascript:void(0);" class="icon" onclick="myFunction()">
			<i class="fa fa-bars"></i>
		</a>
	</div>
</nav>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>