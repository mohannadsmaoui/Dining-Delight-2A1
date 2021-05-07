<?php
class Client
{

    private int $id_client = NULL ;
    private string $nom_cl;
    private string $prenom_cl;
    private string $email_cl;
    private string $password_cl;
    private int $numtel_cl;
    private array $ville;
    private array $Typeu;

    public function __construct($id_client,$nom_cl,$prenom_cl,$email_cl,$password_cl,$numtel_cl,$ville,$Typeu)
    {
        $this->id_client =$id_client;
        $this->nom_cl = $nom_cl;
        $this->prenom_cl = $prenom_cl;
        $this->email_cl=$email_cl;
        $this->password_cl=$password_cl;
        $this->numtel_cl=$numtel_cl;
        $this->ville=$ville;
        $this->Typeu=$Typeu;

    }
    public function getidclient () {
        return $this->id_client;
    }

    public function getnomclient (){
        return $this->nom_cl ;
    } 
    public function getprenomclient (){
        return $this->prenom_cl ;
    }

    public function getemailclient (){
        return $this->email_cl;
    }

    public function getpasswordclient(){
        return $this->password_cl ;
    } 
    public function getnumtelclient(){
        return $this->numtel_cl ;
    }
    public function getvilleclient(){
        return $this->ville ;
    }
    public function getTypeuclient(){
        return $this->Typeu;
    }
  


    public function setidclient ($id_client){
        $this->id_client = $id_client;
    }

    public function setnomclient ($nom_cl){
        $this->nom_cl = $nom_cl;
    }

    public function setprenomclient ($prenom_cl){
        $this->prenom_cl = $prenom_cl;
    } 
    public function setemailclient($email_client){
        $this->email_cl= $email_cl;
    } 
    public function setpasswordclient(){
        $this->password_cl=$password_cl;
    }
    public function setnumtelclient(){
        $this->numtel_cl =$numtel_cl ;
    }
    public function setvilleclient(){
        $this->ville=$ville;
    }
    public function setTypeuclient(){
        $this->Typeu=$Typeu;
}
?>