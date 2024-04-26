<?php
include_once '../models/UserModel.php';

$user = new User($conn);

if ($_SERVER["REQUEST_METHOD"]=="POST"){
  if(empty($_POST["email"]) || empty($_POST["pass"])){
     $error = "credeciales invalidad";
  }else{ 
    $user->log();
  }
}
?>
