<?php 

include "../Controller/AdminC.php";
$AdminC = new AdminC(); 
$categories = $AdminC->afficheradmin();
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
    $result=$categorieC->getadminbyid($_POST['id_admin']);
    if ($result !== false){ 
?>
<body class="admin"> 
	
<
	
    HTML **
    JS **
</body>

</html> 


    





























		


		