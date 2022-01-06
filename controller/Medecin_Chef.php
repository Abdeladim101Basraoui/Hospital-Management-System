<?php

declare(strict_types=1);


class Medecin_Chef extends Medecin
{

    
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
         parent::__construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol);
        
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


    
    public function DemandeMateriel($dmd)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO `demande_materiel`(`Num_demande`, `Date_demande`, `Date_besoin_materiel`, `Cin_employe`, `Cin_employe_technicien`, `Etat_demande`) VALUES (NULL,'".$dmd->date_demande."','".$dmd->date_besoin_materiel."', '".$dmd->cin_employe."', NULL ,'".$dmd->etat_demande."')";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
    }

    

    public function ValiderConge($num_conge)
    {
         $c=$this->connect();
        if($c!=NULL)
        {
        $sql="UPDATE `conge` SET `etat_conge` = 'Validé' WHERE `Num_conge` = '".$num_conge."' ";
        $v= $c->prepare($sql);
        $v->execute();
        return true; 
    }

    
    public function ListerDemandeConge()
    {
        $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM `conge`";
            $r=$c->query($sql);
             return true;  
        }
    }

    
    public function AfficherDemande($num_conge)
    {
         $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM `conge`WHERE `Num_conge`=$num_conge";
            $r=$c->query($sql);
             return true;  
        }

    }

}