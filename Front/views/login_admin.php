<?php
    require('../config.php');
    session_start();

    if (isset($_POST['nom_ad'])){
        $nom_administrateur=$_POST['nom_ad'];
        $mot_passe=$_POST['password_ad'];
        $sql="SELECT * FROM admin_user WHERE nom_ad='" . $nom_ad . "' && password_ad = '". $password_ad."'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==1){
                $user=$query->fetch(); 
                $_SESSION['nom_ad'] = $user['nom_ad'];
                $_SESSION['password_ad'] = $user['password_ad'];
                header('Location:../admin/index.html');
            }
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
  } 

?>



<!DOCTYPE html>
<html lang="en">

<head>
...

    