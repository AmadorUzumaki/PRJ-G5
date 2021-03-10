<html>
<head>
	<meta charset="UTF-8">
	<title>Adventures</title>
  <script languaje="Javascript">
document.write('<style type="text/css">div.cp_oculta{display: none;}</style>');
function MostrarOcultar(capa,enlace)
{
    if (document.getElementById)
    {
        var aux = document.getElementById(capa).style;
        aux.display = aux.display? "":"block";
    }
}

</script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div id="page">
		<div id="header">
			<ul>
				<li>
					<a href="index.php"><span>Home</span></a>
				</li>
				<li>
					<a href="packages.php"><span>Adventures</span></a>
				</li>
				<li>
					<a href="about.php"><span>About</span></a>
				</li>
				<li>
					<a href="register.php"><span>Register</span></a>
				</li>
				<li>
					<a href="login.php"><span>LOGIN</span></a>
				</li>
				<li>
					<a href="prueba_login.php"><span>ADMIN</span></a>
				</li>
			</ul>
			<a href="index.php" id="logo"><img src="images/logo.png" alt="Logo"></a>
		</div>
<body>
  <div class="container" align="center">
      <div class="row">
          <div class="row">
              <div class="col-md-4 col-md-offset-4">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div class="text-center">
                            <h3><i class="fa fa-lock fa-4x"></i></h3>
                            <h2 class="text-center">Forgot Password?</h2>
                            <p>You can reset your password here.</p>
                              <div class="panel-body">

                                <form class="form">
                                  <fieldset>
                                    <div class="form-group">
                                      <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>

                                        <input id="emailInput" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                      </div>
                                      <button action="remember_pass.php" type="button" class="Password">Password</button>
                                    </div>
                                    <!-- PARA VOLVER A PONER LA PASSWORD -->
                                      <a class="texto" href="javascript:MostrarOcultar('texto1');">a</a>
                                      <div class="cp_oculta" id="texto1">
                                        <div class="container">
	                                         <div class="row">
		                                           <div class="col-sm-4">
		                                               <label>Current Password</label>
		                                                 <div class="form-group pass_show">
                                                       <input type="password" value="" class="form-control" placeholder="Current Password">
                                                     </div>
		                                                   <label>New Password</label>
                                                       <div class="form-group pass_show">
                                                         <input type="password" value="" class="form-control" placeholder="New Password">
                                                       </div>
		                                                     <label>Confirm Password</label>
                                                         <div class="form-group pass_show">
                                                           <input type="password" value="" class="form-control" placeholder="Confirm Password">
                                                         </div>
		                                             </div>
	                                         </div>
                                          </div>
																					<a href="login.php">LOGIN</a>
                                    </div>
                                    <!-- ACABA AQUIEL CODIGP DE PONER LA PASSWORD -->
                                  </fieldset>
                                </form>

                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</body>
</html>
