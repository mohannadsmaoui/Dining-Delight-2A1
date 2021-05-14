<?php 

include "../Controller/ClientC.php";
$ClientC = new Clientc(); 
$ClientC = $ClientC->afficherclient();
session_start();


?> 



<!DOCTYPE html>
<html lang="en">

<head>
    ...
</head>
<?php
if (isset($_POST['id_client']) && isset($_POST['search']))
{
    $result=$categorieC->getclientbyid($_POST['client']);
    if ($result !== false){ 
?>
<body class="client"> 
	
<
	
    HTML **
    JS **
</body>

</html> 



    





























		


		