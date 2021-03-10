<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sky Adventure Website</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<ul>
				<li class="current">
					<a href="index.php"><span>Home</span></a>
				</li>
				<li>
					<?php
					if(isset($_SESSION['username']) && $_SESSION['username']!=null){
						echo "<a href='packages.php'><span>Adventures</span></a>";
					}
					?>
				</li>
				<li>
					<?php
					if(isset($_SESSION['username']) && $_SESSION['username']!=null){
						echo "<a href='about.php'><span>About</span></a>";
					}
					?>
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
					<li>
						<?php
						if(isset($_SESSION['rol']) && $_SESSION['rol']=="Admin"){
							echo "<a href='prueba_login.php'><span>ADMIN</span></a>";
						}
						?>
					</li>
				</li>
			</ul>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<div id="body">
			<img src="images/adventure.png" alt="Image">
			<div id="home">
				<div class="blog">
					<h2>Packages</h2>
					<span id="get-it-now">Get it Now!</span>
					<ul>
						<li class="section">
							<h3>Sky Diving</h3>
							<p>
								We offer a memorable first time tandem skydive experience! For those looking to become skydivers,
								we have beginner skydiving courses; the Accelerated Freefall Course (AFF) held regularly at our dropzone
							</p><br>
							<span class="price">$ 50</span>
						</li>
						<li>
							<h3>Hot Air Balloons</h3>
							<p>
								­If you actually need to get somewhere, a hot air balloon is a fairly impractical vehicle.
								You can't really steer it, ­and it only travels as fast as the wind blows.
								But if you simply want to enjoy the experience of flying,
								there's nothing quite like it. .
							</p><br>
							<span class="price">$ 60</span>
						</li>
						<li class="section">
							<h3>Gliding</h3>
							<p>
								Pilots like to challenge themselves. Perhaps to fly around a pre-determined route that they think is the best that can be achieved given the forecast weather conditions.
								In planning a flight, they will consider their glider performance and their skill level.
								If they succeed and get around their planned route they will probably enter this into their club or national ‘league’ online.
							</p><br>
							<span class="price">$ 70</span>
						</li>
					</ul>
					<a href="packages.php" class="view">View All</a>
				</div>
				<div class="packages">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/wJF5NXygL4k" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
				<div><br><br><br>
					<form action="" id="usrform">
					<textarea rows="15" cols="75" name="comment" form="usrform">Comment your opinion here...</textarea><br>
  				<input type="submit">
					</form>
				</div>
			</div>
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
