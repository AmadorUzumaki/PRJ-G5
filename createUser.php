<?php
function encryptPass($pwd){
   //use  password_hash PHP function
  //return a string variable containing the $pwd param encrypted
  return password_hash($pwd, PASSWORD_DEFAULT);
}
function emailValidation($email){
  //use filter_var PHP function
  //return a boolean variable:
  // true if the param $email contain a valid format for an email and false if not
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}
function pwdValidation($pwd,$pwdConfirm){
  //Use the PHP strcmp function - string comparison: binary level

  if (strcmp($pwd,$pwdConfirm) !=0)
  //return a boolean variable
  //true if params are binaryly equal and false if not
  return false;
  return true;
}
if($_SERVER["REQUEST_METHOD"]=="GET"){
  //Comprovam que el camp que utilitzam com a clau primària a la base de dades existeix y té un valor lògic
  if ($_GET["username"]!=null && $_GET["username"]!=""){
    //cream les variables amb els valors del formulari
    $username = $_GET["username"];
    if(!emailValidation($_GET["email"]){
      echo "El correu electrònic no és vàlid";
    }
    else{
      $email = $_GET["email"];
    }
    if(!pwdValidation($_GET["password"],$_GET["passwordConfirm"])){
      $pwdValidationMessage="<b>Les contrasenyes no són iguals.</b> Torna-les a escriure.<br>";
    }else{
      $password = encryptPass($_GET["password"]);
    }

    //connexió amb la base de dades
    $db = new mysqli('localhost','phpmyadmin','1234','users');
    //comprovam la connexió amb la base de dades
    if ($db->connect_errno != null) {
      echo "An unexpected error happened.</br> Error number $db->connect_errno when conneting to the database.</br> Error message: $db->connect_error ";
      exit();
    }else{
      //cercam si l'usuari ja existeix a la base de dades
      $query_select="Select email from users where username='$username'";
      //echo "query_select $query_select</br>";
      $result_select = $db->query($query_select);
      $users=$result_select->fetch_object();
      //comprovam que l'usuari no existeix a la base de dades per evitar repetició d'usuaris.
       if($users != null){
              echo "L'usuari ja existeix, prova un altre nom d'usuari.</br>";
        }else{
              $query_insert="INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
              //echo "query_insert $query_insert</br>";
              //insertar l'usuari a la base de dades
              $result = $db->query($query_insert);
              header("Location: index.html");
	      }
	 $db->close();
  }
}
