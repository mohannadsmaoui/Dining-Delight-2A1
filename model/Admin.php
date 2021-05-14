<?php
class Admin
{

    private int $id_Admin = NULL ;
    private string $nom_ad;
    private string $prenom_ad;
    private string $email_ad;
    private string $password_ad;
    private int $numtel_ad;
    private array $ville;
 

    public function __construct($id_Admin,$nom_ad,$prenom_ad,$email_ad,$password_ad,$numtel_ad,$ville,$Typea)
    {
        $this->id_Admin =$id_Admin;
        $this->nom_ad = $nom_ad;
        $this->prenom_ad = $prenom_ad;
        $this->email_ad=$email_ad;
        $this->password_ad=$password_ad;
        $this->numtel_ad=$numtel_ad;
        $this->ville=$ville;
       

    }
    public function getidadmin () {
        return $this->id_Admin;
    }

    public function getnomadmin (){
        return $this->nom_ad ;
    } 
    public function getprenomadmin (){
        return $this->prenom_ad ;
    }

    public function getemailadmin (){
        return $this->email_ad;
    }

    public function getpasswordadmin(){
        return $this->password_ad ;
    } 
    public function getnumteladmin(){
        return $this->numtel_admin ;
    }
    public function getvilleadmin(){
        return $this->ville ;
    }
    
  


    public function setidAdmin ($id_Admin){
        $this->id_Admin = $id_Admin;
    }

    public function setnomadmin ($nom_ad){
        $this->nom_ad = $nom_ad;
    }

    public function setprenomadmin ($prenom_ad){
        $this->prenom_ad = $prenom_ad;
    } 
    public function setemailadmin($email_admin){
        $this->email_ad= $email_ad;
    } 
    public function setpasswordadmin(){
        $this->password_ad=$password_ad;
    }
    public function setnumteladmin(){
        $this->numtel_ad =$numtel_ad ;
    }
    public function setvilleadmin(){
        $this->ville=$ville;
    }
    
}
?>