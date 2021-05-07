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
		<button><a href="connexion.php">client</a></button>
		<hr>
		<table>
			<tr>
				<th>id_client</th>
				<th>Nom</th>
				<th>Prenom</th>
                <th>Email</th>
				<th>Password</th>
				<th>Num_Tel</th>
                <th>Ville</th>
                <th>Typeu</th>
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
					<td>
						<a href="modifierClient.php?id=<?php echo $user['id_client']; ?>"> Modifier </a>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>