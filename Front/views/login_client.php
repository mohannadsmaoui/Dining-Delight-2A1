<?php
    require('../config.php');
    session_start();

    if (isset($_POST['email_cl'])){
        $email_cl=$_POST['email_cl'];
        $password_cl=$_POST['password_cl'];
        $sql="SELECT * FROM user_info WHERE email_cl='" . $email_cl . "' && password_cl = '". $password_cl."'";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();
            $count=$query->rowCount();
            if($count==1){  
                $user=$query->fetch(); 
                $_SESSION['nom_cl'] = $user['nom_cl'];
                $_SESSION['id_client'] = $user['id_client'];
                header('Location:../index.php');
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


</html>
