<?php

declare(strict_types=1);


class Employe
{

    public $CIN;
    public $nom_complet;
    public $date_naissance;
    public $addresse;
    public $sexe;
    public $tel;
    public $email;
    public $password;
    public $role;

    
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
        $this->CIN=$c;
        $this->nom_complet=$nc;
        $this->date_naissance=$dn;
        $this->addresse=$adr;
        $this->sexe=$sx;
        $this->tel=$tl;
        $this->email=$eml;
        $this->password=$pwr;
        $this->role=$rol;
  
    }
    

    public function connect()
   {
        try { 
        	   $c= new PDO("mysql:host=localhost;dbname=centresante","root","");
               return $c;
            }
        catch (Exception $e)
            {
             	echo 'connexion failed';
            }
   }

    public function se_connecter($eml,$pwr)
   {
         $cin=false;
         $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM `Employe` WHERE `Email`='".$eml."' AND `Password`='".$pwr."'";
            $r=$c->query($sql);
            foreach($r as $v)
            { 
            	$cin=$v[0];
            }
            return $cin;  
        }
        else 
       {  
       	echo "utilisateur ou mot de passe incorrect!";
        return false;
       }
   }

    public function DemanderConge($cng)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO `conge` (`Num_conge`, `Objet`, `Etat_conge`, `Date_conge`, `Duree_conge`, `Note`, `Cin_employe`) VALUES (NULL, '".$cng->Objet."', 'demandé', '".$cng->Date_conge."', '".$cng->Duree_conge."', '".$cng->Note."', '".$cng->Cin_employe."')";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
    }

    
    public function AnnulerConge($num_conge)
    {
         $c=$this->connect();
         if($c!=NULL)
         {
             $sql="UPDATE `conge` SET `Etat_conge`='annulé' WHERE Num_conge='".$num_conge."'";
             $v= $c->prepare($sql);
             $v->execute();
             return true;  
         }   
    }

   

}