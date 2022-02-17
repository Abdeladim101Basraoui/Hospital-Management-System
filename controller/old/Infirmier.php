<?php
include('Employe.php');
class Infirmier extends Employe
{
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
        parent::__construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol);
        // ...
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
    public function ListerPatients()
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM patient";
            $r=$c->query($sql);
             
           return $r;  
         }
         else 
         {
 
         }
    }
    public function AjouterRDV($r)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="INSERT INTO rdv(Date_RDV, Heure_RDV, Objet, Cin_employe, Cin_patient) VALUES ('$r->date_RDV','$r->heure_rdv','$r->objet','$this->CIN','$r->cin_patient')";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
    }
    public function SupprimerRDV($id)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            $sql="DELETE FROM rdv WHERE Id_rdv = '$id'";
            $v= $c->prepare($sql);
            $v->execute();
            return true;  
        }
    }
    public function ListerRDV($cin)
    {
        $c=$this->connect();
        if($c!=NULL)
        {
            if($cin == null)
                $sql="Select * FROM rdv";
            else
                $sql="Select * FROM rdv WHERE Cin_patient = '$cin'";

            $r= $c->query($sql);
            
            return $r;  
        }
    }
    public function AjouterPatient($pat)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="INSERT INTO patient (Cin_patient, Nom_complet, Date_naissance, Addresse, Sexe, Tel, Email, Password, Historique, Cin_employe) VALUES ('$pat->CIN', '$pat->nom_complet', '$pat->date_naissance', '$pat->addresse', '$pat->sexe', '$pat->tel', '$pat->email', '$pat->password', '$pat->historique', '$this->CIN')";
            $query = $c->prepare($sql);
            $query->execute();
            return true;
        }
        else 
        {
            echo "probleme de connexion";
            return false;
        }
    }
}


?>