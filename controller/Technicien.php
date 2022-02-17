<?php
include('Employe.php');

class Technicien extends Employe
{
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
        parent::__construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol);
       
    }

    public function connect()
    {
        try 
        { 
            $c= new PDO("mysql:host=localhost;dbname=centresante","b1sra0u1","root");
            return $c;
        }
        catch (Exception $e)
        {
            echo "connection failed";
        }
    }
    
    public function AjouterMateriel($mtr)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO materiel ( Libelle_materiel, Etat_materiel)
                  VALUES ('$mtr->libelle_materiel', '$mtr->etat_materiel')";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }

    public function AfficherDemandeMat($idd)
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM demande_materiel WHERE Num_demande=$idd";
           $r=$c->query($sql);
           
          return $r;  
      }
        else 
        {

        }
    }
    public function ModifierMateriel($mtr)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE materiel SET Libelle_materiel='$mtr->libelle_materiel',Etat_materiel='$mtr->etat_materiel' WHERE Num_materiel='$mtr->num_materiel'";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }

    
    public function ListerMateriel()
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM materiel ";
           $r=$c->query($sql);
            
          return $r;  
      }
        else 
        {

        }
    }

    public function ListerMaterielDemande($id)
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM materiel as m,materiel_demande as md where md.num_materiel = m.num_materiel and md.num_demande = $id ; ";
           $r=$c->query($sql);
            
          return $r;  
      }
        else 
        {

        }
    }

    public function AfficherMateriel($idm)
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM materiel  WHERE Num_materiel='$idm'";
           $r=$c->query($sql);
            
          return $r;  
      }
        else 
        {

        }
    }


    public function ListerDemande()
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM demande_materiel";
           $r=$c->query($sql);
        
          return $r;  
      }
        else 
        {

        }
    }

    
    public function AfficherDemande($idd)
    {
        $c=$this->connect();
        if($c!=NULL)
        {  
           $sql="SELECT * FROM demande_materiel WHERE Num_demande=$idd";
           $r=$c->query($sql);
           
          return $r;  
      }
        else 
        {

        }
    }
    public function ModifierDemande($dem)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE demande_materiel SET Cin_employe_technicien ='$this->CIN',Etat_demande='$dem->etat_demande' WHERE Num_demande = '$dem->num_demande'";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }

}