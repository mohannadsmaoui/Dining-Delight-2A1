<?PHP
	include '../config.php';
	include '../Model/client.php';

	class ClientC {
		
		function ajouterclient($client){
			$sql="INSERT INTO user_info  (id_client,nom_cl,prenom_cl,email_cl,password_cl,numtel_cl,ville,Typeu) 
			VALUES (:id_client, :nom_cl, :prenom_cl, :email_cl, :password_cl, :numtel_cl, :ville, :typeu)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'nom_cl' => $client->getnomclient(),
					'prenom_cl' => $client->getprenomclient(),
					'email_cl' => $client->getemailclient(),
					'password_cl' => $client->getpasswordclient(),
					'numtel_cl' => $client->getnumtelclient(),
					'ville' => $client->getvilleclient(),
					'Typeu' => $client->gettypeclient(),
                    'id_admin'=> '1'
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherclient(){
			
			$sql="SELECT * FROM client";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimerClient($id_client){
			$sql="DELETE FROM client WHERE id_client= :id_client";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_client',$id_client);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifierClient($client, $id_client){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE client SET 
						nom_cl = :nom_cl, 
						prenom_cl = :prenom_cl,
						email_cl = :email_cl,
						password_cl = :password_cl,
						numtel_cl = :numtel_cl,
						ville= :ville,
						Typeu = :Typeu,
                        id_admin = :id_admin
					WHERE id_client = :id_client'
				);
				$query->execute([
					'nom_cl' => $client->getnomclient(),
					'prenom_cl' => $client->getprenomclient(),
					'email_cl' => $client->getemailclient(),
					'password_cl' => $client->getpasswordclient(),
					'numtel_cl' => $client->getnumtelclient(),
					'ville' => $client->getvilleclient(),
					'Typeu' => $client->gettypeclient(),
                    'id_admin'=> '1',                 
					'id_client' => $id_client
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		} 
		 function getClientById($id_client) {
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'SELECT * FROM client WHERE id_client = :id_client'
				);
				$query->execute([
					'id_client' => $id_client
				]);
				return $query->fetch();
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererClient($id_client){
			$sql="SELECT * from client where id_client=$id_client";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererClient1($id_client){
			$sql="SELECT * from client where id_client=$id_client";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>