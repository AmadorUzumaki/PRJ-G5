<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Adventures</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<ul>
				<li>
					<a href="index.php"><span>Home</span></a>
				</li>
				<li class="current">
					<a href="packages.php"><span>Adventures</span></a>
				</li>
				<li>
					<a href="about.php"><span>About</span></a>
				</li>
				<li>
					<a href="register.php"><span>Register</span></a>
				</li>
				<li>
					<?php
					if(isset($_SESSION['username']) && $_SESSION['username']!=null){
						echo "Welcome, ". $_SESSION['username'];
					}
					else{
						echo "<a href='login.php'><span>LOGIN</span></a>";
					}
					?>
				</li>
				<li>
					<?php
					if(isset($_SESSION['rol']) && $_SESSION['rol']=="Admin"){
						echo "<a href='prueba_login.php'><span>ADMIN</span></a>";
					}
					?>
				</li>
			</ul>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<div id="body">
			<ul class="packages">
				<li>
					<span><a href="https://booking.mallorcaballoons.com/"><img src="images/hot-air-ballons.png" alt="Image"></a></span>
					<div>
						<h2>Hot Air Balloons</h2>
					</div>
				</li>
				<li>
					<span><a href="https://www.skydivespain.com/"><img src="images/skydiving.png" alt="Image"></a></span>
					<div>
						<h2>Sky Diving</h2>
					</div>
				</li>
				<li>
					<span><a href="https://en.yumping.com/gliding"><img src="images/gliding.png" alt="Image"></a></span>
					<div>
						<h2>Gliding</h2>
					</div>
				</li>
			</ul>
		</div>
		<div id="footer">
			<div>
				<div>
					<span>Follow:</span>
					<a href="https://www.facebook.com/iesmanacormanacor/" target="_blank" id="facebook">Facebook</a>
					<a href="https://twitter.com/iesmanacor?lang=ca" target="_blank" id="twitter">Twitter</a>
					<a href="http://www.iesmanacor.cat/" target="_blank" id="googleplus">Google&#43;</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
