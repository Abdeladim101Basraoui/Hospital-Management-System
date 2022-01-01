<?php


class Medecin extends Employe
{


    /**
     * Default constructor
     */
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
        parent::__construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol);
        // ...
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

    public function AjouterFicheConsultation( $Consultation)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="INSERT INTO patient (Cin_patient, Nom_complet, Date_naissance, Addresse, Sexe, Tel, Email, `Password`, Historique, Cin_employe) VALUES ('".$c."', '".$nc."', '".$dn."', '".$a."', '".$s."', '".$t."', '".$e."', '".$p."', '".$h."', NULL)";
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

    public function ModifierFicheConsultation( $Consultation)
    {
        // TODO implement here
    }

    public function AfficherFicheConsultation( $Consultation)
    {
        // TODO implement here
    }


    public function ListerFicheConsultation( $Patient)
    {
        // TODO implement here
    }


    public function ListerPatients()
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM patient";
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


    public function AfficherPatient($cin)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM `patient` WHERE `Cin_patient` = '".$cin."'";
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
