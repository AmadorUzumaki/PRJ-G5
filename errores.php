<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error Page</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
    h5 {
      font: oblique bold 120% cursive;
    }
.button {
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button2 {
  background-color: white;
  color: black;
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}
    </style>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    		    <div class="row">
    		        <div class="col-md-6">
    		            <div class="card text-white bg-primary mb-3">

                          <div class="card-body my-5 py-5">
                            <h2>Error Page</h2>
                            <hr>
                            <ul >
                            <h5>El possible error sea :</h5>
                                <li>El correu no és vàl·lid, torna a provar.</li>
                                <li><b>Les contrasenyes no són iguals.</b> Torna-les a escriure.<br></li>
                                <li>L'usuari ja existeix, prova un altre nom d'usuari</li>
                            </ul>
                          </div>
                        </div>
                        <a href="register.php"><button class="button button2">Volver a registrarse</button></a>
    		        </div>
    		        <div class="col-md-6">


    		        </div>

    		    </div>
    		</div>
    	</div>
    </div>
  </body>
</html>
