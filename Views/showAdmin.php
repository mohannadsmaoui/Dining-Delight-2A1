<?php
include  "../Controller/AdminC.php";

$AdminC = new AdminC(); 
$admins = $AdminC->afficheradministrateur();

?>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Afficher la liste des administrateurs</title>
    </head>
    <body>
		<button><a href="../index.html">Retour</a></button> *******************
		<hr>
		<table>
			<tr>
				<th>Id_admin</th>
				<th>Nom_ad</th>
				<th>Prenom_ad</th>
				<th>Email_ad</th>
				<th>Password_ad</th>
				<th>Numtel_ad</th>
				<th>Ville</th>
				<th>supprimer</th>
			</tr>

			<?php
				foreach($admins as $user){
			?>
				<tr>
					<td><?PHP echo $user['id_admin']; ?></td>
					<td><?PHP echo $user['nom_ad']; ?></td>
					<td><?PHP echo $user['prenom_ad']; ?></td>
					<td><?PHP echo $user['email_ad']; ?></td> 
					<td><?PHP echo $user['password_ad']; ?></td> 
					<td><?PHP echo $user['numtel_ad']; ?></td> 
					<td><?PHP echo $user['Ville']; ?></td> 
					<td>
						<form method="POST" action="supprimerAdmin.php">
						<input type="submit" name="supprimer" value="supprimer">
						<input type="hidden" value=<?PHP echo $user['id_admin']; ?> name="id_admin">
						</form>
					</td>
				</tr>
			<?php
				}
			?>
		</table>
	</body>
</html>