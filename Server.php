<?php

require_once './vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

require_once './AutenticationContact.php';
$contact = new AutenticationContact();


if(isset($_POST)){
  if($contact->confirmCaptcha($_POST['h-captcha-response'])){
    echo 'Mensaje enviado por: ' . $_POST['email'];
    return;
  }
  
  echo 'Capcha incorrecto, vuelva a intentar';
}