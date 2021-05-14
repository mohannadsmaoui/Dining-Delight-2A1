<?PHP
	include '../config.php';
	include '../Model/Admin.php';

	class AdminC {
		
		function ajouteradmin($administrateur){
			$sql="INSERT INTO admin_info (id_admin, nom_ad, prenom_ad, email_ad, password_ad, numtel_ad, ville)
			VALUES (:id_admin, :nom_ad, :prenom_ad, :email_ad, :password_ad, :numtel_ad, :ville)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'nom_administrateur' => $administrateur->getnomclient(),
					'nom_ad' => $administrateur->getnomadmin(),
					'prenom_ad'=> $administrateur->getprenomadmin(),
					'email_ad'=> $administrateur->getemailadmin(),
					'password_ad'=> $administrateur->getpasswordadmin(),
				    'numtel_ad'=> $administrateur->getnumteladmin(),
					'ville'=> $administrateur->getvilleadmin(),
					
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficheradministrateur(){
			
			$sql="SELECT * FROM admin_info";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function supprimeradministrateur($id_admin){
			$sql="DELETE FROM admin_info WHERE id_admin= :id_admin";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id_admin',$id_admin);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		function modifieradministrateur($client, $id_client){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE admin_info SET 
						nom_ad = :nom_ad, 
						prenom_ad = :prenom_ad,
						email_ad = :email_ad,
						password_ad = :password_ad,
						numtel_ad = :numtel_ad,
						ville = :ville;
					WHERE id_admin = :id_admin'
				);
				$query->execute([
					'nom_administrateur' => $administrateur->getnomclient(),
					'nom_ad' => $administrateur->getnomadmin(),
					'prenom_ad'=> $administrateur->getprenomadmin(),
					'email_ad'=> $administrateur->getemailadmin(),
					'password_ad'=> $administrateur->getpasswordadmin(),
				    'numtel_ad'=> $administrateur->getnumteladmin(),
					'ville'=> $administrateur->getvilleadmin(),
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererAdmin($id_admin){
			$sql="SELECT * from admin_info where id_admin=$id_admin";
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

	
		public function getClientById($id_client) {
            try {
                $db = config::getConnexion();
                $query = $db->prepare(
                    'SELECT * FROM user_info WHERE id_client = :id_client'
                );
                $query->execute([
                    'id_client' => $id_client
                ]);
                return $query->fetch();
            } catch (PDOException $e) {
                $e->getMessage();
            }
        }
		function trierClientasc(){

            $sql="SELECT * FROM user_info order by nom_cl";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        } 


        function trierClientdesc(){

            $sql="SELECT * FROM user_info order by nom_cl desc";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }
		
	}
		
	

?>