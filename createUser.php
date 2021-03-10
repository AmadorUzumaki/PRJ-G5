<?php
include "functions.php";
require 'user.php';
if($_SERVER["REQUEST_METHOD"]=="GET"){
  //Comprovam que el camp que utilitzam com a clau primària a la base de dades existeix y té un valor lògic
  if ($_GET["username"]!=null && $_GET["username"]!=""){
    //cream les variables amb els valors del formulari
    $username = $_GET["username"];
    $email=$_GET['email'];
    $registerError= array();
    if(isset($email)){
      if(!emailValidation($email))
        $registerError[]="<li>El correu no és vàl·lid, torna a provar.</li>";
    }
    if((isset($_GET['password']))&&(isset($_GET['password2']))){
      if(!pwdValidation($_GET['password'],$_GET['password2'])){
        $registerError[]="<li><b>Les contrasenyes no són iguals.</b> Torna-les a escriure.</li>";
      }else{
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
      //echo "query_select $query_select</br>";
      $result_select = $db->query($query_select);
      $users=$result_select->fetch_object();
      //comprovam que l'usuari no existeix a la base de dades per evitar repetició d'usuaris.
       if($users != null){
              $registerError[]="<li>L'usuari ja existeix, prova un altre nom d'usuari.</li>";
        }
        if($registerError !=null){
          $Error_param="";
          foreach ($registerError as $Error){
            $Error_param=$Error_param."<br>".$Error;
          }
          header("Location: errores.php?error=$Error_param");
        }else{
    print_r($registerError);
		if(isset($password_ins) and emailValidation($email)){

              $User1 = new User($username,$email, $password_ins, "User");
              $query_insert="INSERT INTO Users (Dni,Usuario,Contrasenya,Correo,Sexo) VALUES ('" .$User1->getUsername() ."','" .$User1->getEmail()."', '".$User1->getPassword()."', '".$User1->getRol()."')";
              //insertar l'usuari a la base de dades
              $result = $db->query($query_insert);
              header("Location: index.php");
		}
	      }
	 $db->close();
 }
}
}
?>
