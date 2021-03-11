<?php
//feim que el codi utilitzi els arxius PHP que tenen les funcions necessàries per registrar l'usuari correctament i el que conté l'objecte que utilitzarem per fer l'insert a la base de dades
include "functions.php";
require 'user.php';
if($_SERVER["REQUEST_METHOD"]=="GET"){
  //Comprovam que el camp que utilitzam com a clau primària a la base de dades existeix y té un valor lògic
  if ($_GET["username"]!=null && $_GET["username"]!=""){
    //cream les variables amb els valors del formulari a més d'un array que guardarà tots els errors que hi hagi al register
    $username = $_GET["username"];
    $email=$_GET['email'];
    $registerError= array();
    //si la variable està inicialitzada
    if(isset($email)){
      //si l'email no passa la validació, l'array guardarà l'error que després es mostrarà a una altre pàgina
      if(!emailValidation($email))
        $registerError[]="<li>El correu no és vàl·lid, torna a provar.</li>";
    }
    //si les variables estan inicialitzades
    if((isset($_GET['password']))&&(isset($_GET['password2']))){
      //si les contrasenyes no coincideixen, es guardarà a l'array dels error el missatge que després s'enviarà cap a una altre pàgina
      if(!pwdValidation($_GET['password'],$_GET['password2'])){
        $registerError[]="<li><b>Les contrasenyes no són iguals.</b> Torna-les a escriure.</li>";
      }else{
        //si tot és correcte, encriptarem la contrasenya que es guardarà a la base de dades per tenir més seguretat
          $password_ins = encryptPass($_GET["password"]);
      }
    }

    //connexió amb la base de dades
    $db = new mysqli('localhost','phpmyadmin','1234','users');
    //comprovam la connexió amb la base de dades
    if ($db->connect_errno != null) {
      echo "An unexpected error happened.</br> Error number $db->connect_errno when conneting to the database.</br> Error message: $db->connect_error ";
      exit();
    }else{
      //cercam si l'usuari ja existeix a la base de dades
      $query_select="Select * from users where username='$username'";
      $result_select = $db->query($query_select);
      $users=$result_select->fetch_object();
      //comprovam que l'usuari no existeix a la base de dades per evitar repetició d'usuaris. El missatge d'error es guardarà a l'array per poder veure-lo després a una altre pàgina
       if($users != null){
              $registerError[]="<li>L'usuari ja existeix, prova un altre nom d'usuari.</li>";
        }
        //si l'array amb errors conté algun missatge, convertirà l'array en una concatenació de text, que podrem enviar sense cap problema a la pàgina dels errors
        if($registerError !=null){
          $Error_param="";
          foreach ($registerError as $Error){
            $Error_param=$Error_param."<br>".$Error;
          }
          //una vegada hem convertir l'array en string, redirigim cap a la pàgina que mostarà els errors en pantalla amb la variable de l'string errors com a paràmetre
          header("Location: errores.php?error=$Error_param");
          //en cas que l'array no contengui res, és a dir, que no hi ha cap error
        }else{
          //comprovam per si de cas que la contrasenya encriptada s'hagi fet correctament
		if(isset($password_ins)){
              //cream l'objecte que utilitzarem per fer l'insert a la base de dades amb els valors que hem guardat
              $User1 = new User($username,$email, $password_ins, "User");
              //utilitzam els getters de l'objecte per que l'insert es faci correctament amb la utilització de l'objecte
              $query_insert="INSERT INTO users VALUES ('" .$User1->getUsername() ."','" .$User1->getEmail()."', '".$User1->getPassword()."', '".$User1->getRol()."')";
              //executam la query i redirigim cap a la pàgina principal
              $result = $db->query($query_insert);
              header("Location: index.php");
		}
	      }
	 $db->close();
 }
}
}
?>
