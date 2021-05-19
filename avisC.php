<?PHP
include_once "../../config.php";

class avisC {
//ajouter
	    function ajoutAvis ($avis_client){ 
		$sql="insert into avis_client (id_avis,id_p,id_client,nb_etoile,commentaire) VALUES (:id_avis,:id_p,:id_client, :nb_etoile, :commentaire)";
		$db = config::getConnexion();
		
        try{
        $req=$db->prepare($sql);
		
        $id_avis=$avis_client->getIdAvis();
        $id_p=$avis_client->getIdP();
        $id_client=$avis_client->getIdC();
        $nb_etoile=$avis_client->getNbEtoile();
        $commentaire=$avis_client->getCommentaire();
		
		$req->bindValue(':id_avis',$id_avis);
		$req->bindValue(':id_p',$id_p);
		$req->bindValue(':id_client',$id_client);
		$req->bindValue(':nb_etoile',$nb_etoile);
		$req->bindValue(':commentaire',$commentaire);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->get();
        }
		
	    }


//afficher
	    function afficherAvis(){
		$sql="SELECT * From avis_client";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
             }
//supprimer
        function supprimerAvis($id_avis){
		$sql="DELETE FROM avis_client where id_avis= :id_avis";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_avis',$id_avis);
		try{
            $req->execute();
           header('Location: afficherAvis.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
        }
//modifier  
	function modifierAvis($avis,$id_avis){
	  
		$sql="UPDATE avis_client SET nb_etoile=:nb_etoile,commentaire=:commentaire WHERE id_avis=:id_avis";
		
		$db = config::getConnexion();
		//$db->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

        $req=$db->prepare($sql);

    try{
        $req->bindValue(':nb_etoile',$avis->getNbEtoile());
        $req->bindValue(':commentaire',$avis->getCommentaire());
        $req->bindValue(':id_avis',$avis->getIdAvis());
		
            $s=$req->execute();
			
            header('Location: afficherAvis.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;


        }
		
	}
    //recuperer
    
	
	function recupererAvis($id_p){
		$sql="SELECT * from avis_client where id_avis=$id_p";
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