<html>
<body>
<h2>Create Result</h2>
<!-- amb PHP comprovam que les variables existeixen i no són buides, de forma que poguem mostrar per pantalla els seus valors dins el formulari-->
<form action="updateadmin.php" method="GET">
<p>USERNAME: <input type="text" <?php if(isset($_GET['user'])){echo "readonly";}?> value="<?php if(isset($_GET['user'])){ echo $_GET['user'];}?>" name="username"></p>
<p>EMAIL: <input type="text" name="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];}?>"></p>
<p>PASSWORD: <input type="text" name="password" <?php if(isset($_GET['pass'])){echo "readonly";}?> value="<?php if(isset($_GET['pass'])){ echo $_GET['pass'];}?>"></p>
<p>ROL: <select name="rol">
<option value='User' <?php if(isset($_GET['rol']) && $_GET['rol']=='User'){echo "selected='selected'";}?>>User</option>
<option value='Admin' <?php if(isset($_GET['rol']) && $_GET['rol']=='Admin'){echo "selected='selected'";}?>>Admin</option>
</select></p>
<input type="submit">
</form>
</body>
</html>
