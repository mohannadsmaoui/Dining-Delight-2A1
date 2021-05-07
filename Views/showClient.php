<?php
include "../Controller/ClientC.php";

$ClientC = new ClientC();
$clients = $ClientC->afficherclient();

?>
<html>
	