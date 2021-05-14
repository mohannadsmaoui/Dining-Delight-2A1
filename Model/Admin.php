<?php
class Admin
{
    private ?int $id_admin ;
    private string $nom_ad;
    private string $prenom_ad;
    private string $email_ad;
    private string $password_ad;
    private ?int $numtel_ad;
    private string $ville;
    public function __construct($id_admin,$nom_ad,$prenom_ad,$email_ad,$password_ad,$numtel_ad,$ville)
    {
        $this->id_admin =$id_admin;
        $this->nom_ad =$nom_ad;
        $this->prenom_ad =$prenom_ad;
        $this->email_ad =$email_ad;
        $this->password_ad =$password_ad;
        $this->numtel_ad =$numtel_ad;
        $this->ville =$ville;

    }
    public function getidadmin () {
        return $this->id_admin;
    }

    public function getnomadmin(){
        return $this->nom_ad ;
    } 
    public function getprenomadmin(){
        return $this->prenom_ad ;
    } 
    public function getemailadmin(){
        return $this->email_ad ;
    } 
    public function getpasswordadmin(){
        return $this->password_ad;
    }
    public function getnumteladmin(){
        return $this->numtel_ad ;
    }
    public function getvilleadmin(){
        return $this->ville ;
    } 

    public function setidadmin ($id_admin){
        $this->id_admin = $id_admin;
    }
    public function setnomadmin ($nom_ad){
        $this->nom_ad = $nom_ad;
    }
    public function setprenomadmin ($prenom_ad){
        $this->prenom_ad = $prenom_ad;
    }
    public function setemailadmin ($email_ad){
        $this->email_ad = $email_ad;
    }
    public function setpasswordadmin ($password_ad){
        $this->password_ad = $password_ad;
    }
    public function setnumteladmin ($numtel_ad){
        $this->numtel_ad = $numtel_ad;
    }
    public function setvilleadmin ($ville){
        $this->ville = $vilee;
    }

}
?>