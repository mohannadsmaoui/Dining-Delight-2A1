<?php
session_start();

include_once '../Model/Admin.php';
include_once '../Controller/AdminC.php';
$message="";
$userC = new AdminC();
if (isset($_POST["email_ad"])&&
    isset ($_POST["password_ad"])) {
  if (!empty($_POST["email_ad"]) &&
  !empty($_POST["password_ad"]))
  {
    $message=$userC->connexionAdmin($_POST["email_ad"],$_POST["password_ad"]);
    $_SESSION['email_ad'] =$_POST["email_ad"];

    if($message≠'email_ad ou password_ad est incorrect') {
        header('location:profilAdmin.php');}
        else{
            $message='email_ad ou password_ad est incorrect';
        }

  }
    
  else  
    $message="missing information";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>...