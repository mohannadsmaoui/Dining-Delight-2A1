<?php
     include "../Controller/ClientC.php";
     include_once '../Model/Client.php';

	$ClientC = new ClientC();

if(isset($_POST['id_client']) && isset($_POST['nom_cl']) && isset($_POST['prenom_cl']) && isset($_POST['email_cl']) && isset($_POST['password_cl']) && isset($_POST['numtel_cl']) && isset($_POST['ville']) && isset($_POST['Typeu']))
 if (!empty($_POST['id_client']) &&!empty($_POST['nom_cl'])&& !empty($_POST['prenom_cl'])&& !empty($_POST['email_cl'])&& !empty($_POST['password_cl'])&& !empty($_POST['numtel_cl']) && !empty($_POST['ville']) && !empty($_POST['Typeu']))

            $user = new client($_POST['id_client'],$_POST['nom_cl'],$_POST['prenom_cl'],$_POST['email_cl'],$_POST['password_cl'],$_POST['numtel_cl'],$_POST['ville'],$_POST['Typeu']);           
            $ClientC->modifierClient($user, $_GET['id_client']);
            header('Location:../index.php');
      }
     
	}

?>

<?php
	session_start();
	if(!isset($_SESSION["id_client"])){
    var_dump($_SESSION);
		exit(); 
	}
?>  


<!DOCTYPE html>
<html lang="en">

  <head> ...

