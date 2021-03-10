<html>
<body>
<h2>Create Result</h2>
<!--we are using GET method to see de parameters in the url-->
<form action="updateadmin.php" method="GET">
<p>USERNAME: <input type="text" value="<?php if(isset($_GET['username'])){ echo $_GET['username'];}?>" name="username"></p>
<p>EMAIL: <input type="text" name="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];}?>"></p>
<p>PASSWORD: <input type="text" name="password" value="<?php if(isset($_GET['pass'])){ echo $_GET['pass'];}?>"></p>
<p>ROL: <input type="text" name="rol" value="<?php if(isset($_GET['rol'])){ echo $_GET['rol'];}?>"></p>
<input type="submit">
</form>
</body>
</html>
