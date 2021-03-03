<?php
//encriptar la contrasenya
function encryptPass($pwd){
  return password_hash($pwd, PASSWORD_DEFAULT);
}
//comprovar que l'email té un format vàlid
function emailValidation($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}
//validar si les dues contrasenyes són iguals
function pwdValidation($pwd,$pwdConfirm){
  if (strcmp($pwd,$pwdConfirm) !=0)
  return false;
  return true;
}
//verificar si la contrasenya és vàlida
function pwdVerification($pwd,$pwd_hash){
return password_verify($pwd,$pwd_hash);
}
?>
