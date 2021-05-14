<?php
include "../Controller/ClientC.php";

$ClientC = new ClientC();
$clients = $ClientC->afficherclient();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Afficher la liste des Clients</title>
    </head>
    <body>
		<button><a href="../index.html">Retour</a></button>  *****************************
		<hr>
		<table>
			<tr>
				<th>id_client</th>
				<th>Nom client</th>
				<th>Prenom client</th>
                <th>Email client</th>
                <th>Password client</th>
				<th>Num telephone</th>
				<th>Ville</th>
                <th>Type</th>
				<th>supprimer</th>
			</tr>

			<?php
				foreach($clients as $user){
			?>
				<tr>
					<td><?PHP echo $user['id_client']; ?></td>
					<td><?PHP echo $user['nom_cl']; ?></td>
					<td><?PHP echo $user['prenom_cl']; ?></td> 
                    <td><?PHP echo $user['email_cl']; ?></td> 
                    <td><?PHP echo $user['password_cl']; ?></td> 
					<td><?PHP echo $user['numtel_cl']; ?></td>
					<td><?PHP echo $user['ville']; ?></td> 
                    <td><?PHP echo $user['Typeu']; ?></td>  
					<td>
						<form method="POST" action="supprimerClient.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id_client']; ?> name="id_client">
						</form>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>