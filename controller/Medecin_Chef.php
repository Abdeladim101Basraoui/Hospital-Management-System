<?php


include('Medecin.php');

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
            $sql="INSERT INTO demande_materiel (Num_demande, Date_demande, Date_besoin_materiel, Cin_employe,Cin_employe_technicien, Etat_demande) VALUES (NULL,'$dmd->date_demande','$dmd->date_besoin_materiel','$dmd->cin_employe', NULL ,'demande')";
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
            $sql="UPDATE conge SET  Etat_conge ='valide' WHERE Num_conge ='$num_conge'";
            $v= $c->prepare($sql);
            $v->execute();
            return true; 
        }
    }
    public function RefuserConge($num_conge)
    {
         $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE conge SET  Etat_conge ='refuse' WHERE Num_conge ='$num_conge'";
            $v= $c->prepare($sql);
            $v->execute();
            return true; 
        }
    }

    public function ListerEmploye()
    {
        $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM employe";
            $r=$c->query($sql);
            return $r;  
        }
    }
    public function ListerDemandeConge()
    {
        $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT e.Nom_complet,e.Role,c.Objet,c.Etat_conge,c.Date_conge,c.Duree_conge,c.Note ,c.Num_conge FROM `conge` as c,employe as e WHERE c.Cin_employe = e.Cin_employe";
            $r=$c->query($sql);
            return $r;  
        }
    }

    
    public function AfficherDemande($num_conge)
    {
         $c=$this->connect();
         if($c!=NULL)
         {  
            $sql="SELECT * FROM conge WHERE `Num_conge`=$num_conge";
            $r=$c->query($sql);
            return $r;  
        }

    }

}
