<?php
class Admin
{
    private ?int $id_admin = null;
    private string $nom_administrateur;
    private string $mot_passe;
    public function __construct($nom_administrateur,$mot_passe)
    {
        $this->nom_client =$nom_client;
        $this->prenom_client = $prenom_client;

    }
    public function getidadmin () {
        return $this->id_admin;
    }

    public function getnomadmin(){
        return $this->nom_administrateur ;
    } 
    public function getmotpasseadmin(){
        return $this->mot_passe;
    }
  
    public function setnomadmin ($nom_administrateur){
        $this->nom_admin = $nom_administrateur;
    }
    public function setmotpasseclient($mot_passe){
        $this->mot_passe=$mot_passe;
    }
}
?>