<?PHP
class Reclamation {
	private $id_client;
	private $id_reclamation;
	private $date_reclamation;
	private $comm_reclam;
	
		function __construct($id_client,$comm_reclam){
		$this->id_client=$id_client;
		$this->comm_reclam=$comm_reclam;
	}
	
	function getIdClient () {
		return $this->id_client;
	}
	function getIdReclamation(){
		return $this->id_reclamation;
	}
	function getDateReclamation(){
		return $this->date_reclamation;
	}
	function getCommReclam(){
		return $this->comm_reclam;
	}

	function setIdClient($id_client){
		$this->id_client=$id_client;
	}
	function setIdReclamation($id_reclamation){
		$this->id_reclamation= $id_reclamation;
	}
	function setDateReclamation($date_reclamation){
		$this->date_reclamation=$date_reclamation;
	}
	function setCommReclam($comm_reclam){
		$this->comm_reclam=$comm_reclam;
	}
	
}

?>