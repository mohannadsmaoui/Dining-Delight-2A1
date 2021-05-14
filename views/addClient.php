<?php
include "./Client.php";
include "./ClientC.php";

if(isset($_POST['id_client']) && isset($_POST['nom_cl']) && isset($_POST['prenom_cl']) && isset($_POST['email_cl']) && isset($_POST['password_cl']) && isset($_POST['numtel_cl']) && isset($_POST['ville']) && isset($_POST['Typeu']))
{if (!empty($_POST['id_client']) &&!empty($_POST['nom_cl'])&& !empty($_POST['prenom_cl'])&& !empty($_POST['email_cl'])&& !empty($_POST['password_cl'])&& !empty($_POST['numtel_cl']) && !empty($_POST['ville']) && empty($_POST['Typeu']))

{	$id_client=$_POST['id_client'];
	$nom_cl=$_POST['nom_cl'];
	$prenom_cl=$_POST['prenom_cl'];
	$email_cl=$_POST['email_cl'];
    $password_cl=$_POST['password_cl'];
	$numtel_cl=$_POST['numtel_cl'];
	$ville=$_POST['ville'];
    $Typeu=$_POST['Typeu'];

	

$c=new Client($id_client,$nom_cl,$prenom_cl,$email_cl,$password_cl,$numtel_cl,$ville,$Typeu);
$cC=new ClientC();
$test=$cC->ajouter($c);
header('Location: afficherClientEya.php');
if($test==true)
echo "Ajout avec succés";
else
echo "Echec";
}
}

?>

<!DOCTYPE html>
<html lang="en">

  <head>