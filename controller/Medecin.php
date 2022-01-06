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
            $sql ="INSERT INTO `consultation`(`Id_consultation`, `Date_Consultation`, `Note_Consultation`, `Traitement`, `Cin_patient`, `Cin_employe`) VALUES (NULL,'".$Consultation->date_consultation."','".$Consultation->note_consultation."','".$Consultation->traitement."','".$Consultation->cin_patient."','".$this->CIN."')";
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

    public function ModifierFicheConsultation($consultation,$id_consultation)
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="UPDATE `consultation` SET Note_Consultation='".$consultation->note_consultation."',Traitement='".$consultation->traitement."',Cin_patient='".$consultation->cin_patient."' WHERE `Id_consultation` = '".$id_consultation."'";
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
           foreach($r as $v)
           { 

           }
            
          return true;  
        }
        else 
        {

        }
    }


    public function ListerFicheConsultation()
    {
        $c= $this->connect();
        if($c!=null)
        {
            $sql ="SELECT * FROM consultation";
            $r=$c->query($sql);
            foreach($r as $v)
            { 
 
            }
             
           return true;  
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
            foreach($r as $v)
            { 
 
            }
             
           return true;  
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
 
            }
             
           return true;  
         }
         else 
         {
 
         }
    }

}
