<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">

form {
	padding: 100px 15px 20px;
	border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

	</style>
</head>
<body>
	<div id="page">
		<div id="header">
			<ul>
				<li>
					<a href="index.php"><span>Home</span></a>
				</li>
				<?php
				//comprovam que les variables de sessió estigui inicialitzada i no sigui nula, i si és així, podem accedir a altres pàgines, a més que envers de la finestra de login, puguis veure que tens la sessió iniciada i tens una finestra per tancar-la
				if(isset($_SESSION['username']) && $_SESSION['username']!=null){
					echo "<li><a href='packages.php'><span>Adventures</span></a></li>";
				}
				?>
					<?php
					if(isset($_SESSION['username']) && $_SESSION['username']!=null){
						echo "<li><a href='about.php'><span>About</span></a></li>";
					}
					?>
				<li>
					<a href="register.php"><span>Register</span></a>
				</li>
				<li class="current">
					<a href="login.php"><span>LOGIN</span></a>
				</li>
					<?php
					if(isset($_SESSION['rol']) && $_SESSION['rol']=="Admin"){
						echo "<li><a href='prueba_login.php'><span>ADMIN</span></a>
					</li>";
					}
					?>
			</ul>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="Logo"></a>
		</div>
		<div id="body">
		<form action="readUser.php" method="get">
  <div class="container">
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="forget.php">password?</a></span>
  </div>
</form>

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
