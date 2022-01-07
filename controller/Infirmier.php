<?php
#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
trait myconnect{
   public  $con;
    public static function connect()
    {
        try {
            $con = new PDO("mysql:host=localhost;dbname=centresante", "b1sra0u1", "root");
            echo "<script>alert('connected');</script>";
            return $con;
        } catch (Exception $e) {
            echo "connection failed $e";
        }
    }
    /**
     * insert values to the calendar table for the availiable dates
    */
    public static function insertCalendar()
    {
        try {
            $c = self::connect();
            if ($c != null) {
                for ($i = 8; $i < 17; $i++) {
                    for ($j = 0; $j < 4; $j+=3) {
                         $req = "INSERT INTO `calendrier_rdv` (`id_calendrier`, `Date_calendrier_RDV`, `Heure_Calendrier_RDV`, `id_rdv`) VALUES (NULL, '2022-01-09', '$i:".$j."0:00', NULL);";
                         $res =$c->prepare($req);
                         $res->execute();
                         
                    }
                }
                echo "<script>alert('added to database');</script>";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }
}


class Infirmier #extends Employe
{

    public $req;
    use myconnect;

    public function __construct()
    {
    }

    /**
     * show all the patients
     */
    public function afficherRDV()
    {
        try {

            $this->ListerRDV( "not null","Cin_Patient");
        } catch (Exception $ex) {
            echo "$ex";
        }
    }


    /**
     * @param  $col = column name
     * @param  $val = value to search for
     */
    public static RDV $rdv;
    public function ListerRDV($val, $col = "Cin_patient")
    {

        try {
            $c = Infirmier::connect();
            $tbl = array();
            $x = 0;
            if ($c != null) {
                $req = "SELECT * FROM `rdv` WHERE $col='$val'";
                if ($val === "null" || $val === "not null") {
                    $req = "SELECT * FROM `rdv` WHERE $col is $val";
                }
                $res = $c->query($req);

                foreach ($res as $var) {
                    $tbl[$x] = new RDV($var[0],$var[1], $var[2], $var[3], $var[4], $var[5]);
                 echo $tbl[$x];
                 echo count($tbl);
                //  echo $x++;
                    // echo "$var[0],$var[1], $var[2], $var[3], $var[4], $var[5]";
                }
                
            } else {
                echo "nothing in the RDV Table";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }



    // public function __construct($c, $nc, $dn, $adr, $sx, $tl, $eml, $pwr, $rol)
    // {
    //     parent::__construct($c, $nc, $dn, $adr, $sx, $tl, $eml, $pwr, $rol);

    // }

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

    // /**
    //  * @param  $RDV
    //  */
    // public function AjouterRDV($RDV)
    // {
    //     // TODO implement here
    //ajutouter rdv
    //modifier id_rdv dans la calendrier
    // }



    #-------------annuler rdv function
    #modifier etat
    #supprimer rdv

    // /**
    //  * @param  $Patient
    //  */
    // public function AjouterPatient(Patient $Patient)
    // {
    //     $req = "INSERT INTO `` VALUES($Patient->nom_complet)";
    // }

    // /**
    //  * @param  $Patient
    //  */
    // public function ModifierPatient($Patient)
    // {
    //     // TODO implement here

    // }

    // /**
    //  * @param null $Patient
    //  */
    // // public function ChercherPatient(null $Patient)
    // // {
    // //     # =  "SELECT * FROM `` WHERE $Patient->";
    // // }

    // /**
    //  * 
    //  */
    // public function ListerPatients()
    // {
    // }
}
