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
            $c= new PDO("mysql:host=localhost;dbname=centresante","root","");
            return $c;
        }
        catch (Exception $e)
        {
            echo "connection failed";
        }
    }
    
    public function AjouterMateriel( $mtr)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO materiel ( Libelle_materiel, Etat_materiel)
                  VALUES ('$mtr->Libelle_materiel', '$mtr->Etat_materiel')";
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

   
    public function ModifierMateriel( $mtr,$idm)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="UPDATE materiel SET Libelle_materiel='$mtr->Libelle_materiel',Etat_materiel='$mtr->Etat_materiel' WHERE Num_materiel='$idm'";
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

}