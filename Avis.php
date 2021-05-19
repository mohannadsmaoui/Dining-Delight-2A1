<?PHP
class Avis{
	private $id_avis;
	private $id_p;
	private $id_client;
	private $nb_etoile;
	private $commentaire;
	
	function __construct($id_p,$id_client,$nb_etoile,$commentaire){

		$this->id_p=$id_p;
        $this->id_client=$id_client;
		$this->nb_etoile=$nb_etoile;
        $this->commentaire=$commentaire;
	}
	
	function getIdAvis () {
		return $this->id_avis;
	}
	function getIdP(){
		return $this->id_p;
	}
	function getIdC(){
		return $this->id_client;
	}
	function getNbEtoile(){
		return $this->nb_etoile;
	}
	function getCommentaire (){
		return $this->commentaire;
	}
    



	function setIdAvis($id_avis){
		$this->id_avis=$id_avis;
    }
    
	function setIdP($id_p){
		$this->id_p=$id_p;
	}
	function setIdC($id_client){
		$this->id_client= $id_client;
	}
	function setNbEtoile($nb_etoile){
		$this->nb_etoile=$nb_etoile;
	}
	function setCommentaire($commentaire){
		$this->commentaire=$commentaire;
	}
}

?>