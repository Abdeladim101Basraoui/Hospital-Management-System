<?php
include("Employe.php");

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
            $c= new PDO("mysql:host=localhost;dbname=centresante","b1sra0u1","root");
            return $c;
        }
        catch (Exception $e)
        {
            echo "connection failed";
        }
    }

    public function AjouterFicheConsultation($con)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="INSERT INTO consultation(Date_Consultation, Note_Consultation, Traitement, Cin_patient, Cin_employe) VALUES ('$con->date_consultation','$con->note_consultation','$con->traitement','$con->cin_patient','$this->CIN')";
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


    public function ModifierFicheConsultation($con)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="UPDATE `consultation` SET Note_Consultation='$con->note_consultation',Traitement='$con->traitement',Cin_patient='$con->cin_patient' WHERE `Id_consultation` = '$con->id_consultation'";
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

    public function AfficherFicheConsultation($id_consultation)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM `consultation` WHERE `Id_consultation` = '".$id_consultation."'";
            $r=$c->query($sql);
            
          return $r;  
        }
        else 
        {

        }
    }


    public function ListerFicheConsultation($cin)
    {
        $c= $this->connect();
        if($c!=null)
        {
            if($cin === null)
            {
                $sql ="SELECT * FROM consultation where Cin_employe = '$this->CIN'";
            }
            else{
                $sql ="SELECT * FROM consultation where Cin_patient='$cin' and Cin_employe = '$this->CIN'";
            }
            $r=$c->query($sql);
             
           return $r;  
        }
        else 
        {

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


    public function AfficherPatient($cin)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM `patient` WHERE `Cin_patient` = '".$cin."'";
            $r=$c->query($sql);
            foreach($r as $v)
            { 
                echo "<p>  <span> Cin :</span><span> $v[0]</span>  </p>
                <p>  <span> Nom :</span><span> $v[1]</span>  </p>
                <p>  <span> DateNaissance :</span><span> $v[2]</span>  </p>
                <p>  <span> Addresse :</span><span> $v[3]</span>  </p>
                <p>  <span> Sexe :</span><span> $v[4]</span>  </p>
                <p>  <span> Historique :</span><span> $v[8]</span>  </p>
                <p>  <span><a href='../centre de sante/consultations.php?cin=$v[0]'>Afficher les fiches consultation</a></span>  </p>
                ";
            }
             
           return true;  
         }
         else 
         {
 
         }
    }

}
