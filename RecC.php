<?PHP
include_once "../../config.php";

class RecC {


	function ajouterRec ($rec){-
		$sql="insert into reclamations (id_client,comm_reclam) values (:id_client,:comm_reclam)";
		$db = config::getConnexion();

        $req=$db->prepare($sql);
		
        $idc=$rec->getIdClient();
        $idr=$rec->getIdReclamation();
		$cr=$rec->getCommReclam();
        try{
            $req->bindValue(':id_client',$idc);
		$req->bindValue(':comm_reclam',$cr);

                 $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->get;
        }
		
	}


	function afficherRec(){
		$sql="SElECT * From reclamations";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerRec($id_reclamation){
		$sql="DELETE FROM reclamations where id_reclamation= :id_reclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_reclamation',$id_reclamation);
		try{
            $req->execute();
           header('Location: afficherReclamation.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    

	function modifierRec($rec,$id_reclamation){
	  
		$sql="UPDATE reclamations SET comm_reclam=:comm_reclam WHERE id_reclamation=:id_reclamation";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
    try{
        $req->bindValue(':comm_reclam',$rec->getCommReclam());
        $req->bindValue(':id_reclamation',$rec->getIdReclamation());
		
            $s=$req->execute();
            header('Location: afficherReclamation.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;


        }
		
	}

	function recupererRec($id_p){
		$sql="SELECT * from reclamations where id_reclamation=$id_p";
		$db = config::getConnexion();
		try{
		$l=$db->query($sql);
		$liste=$l->fetchAll();
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	

















































}










?>