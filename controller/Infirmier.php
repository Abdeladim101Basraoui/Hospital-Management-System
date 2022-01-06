<?php
#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
trait myconnect{
   public  $con;
    public function connect()
    {
        try 
        { 
            $con= new PDO("mysql:host=localhost;dbname=centresante","b1sra0u1","root");
            return $con;
        }
        catch (Exception $e)
        {
            echo "connection failed $e";
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
    public function ListerRDV()
    {
        try {
          
        $this->AfficherRDV("Cin_Patient","not null");
        } catch (Exception $ex) {
            echo "$ex";
        }
    }


        /**
     * @param  $col = column name
     * @param  $val = value to search for
     */
    public function AfficherRDV($val,$col="Cin_patient")
    {
        try {
            $c = $this->connect();
            if ($c != null) {
                $req = "SELECT * FROM `rdv` WHERE $col='$val'";
                if($val==="null" ||$val==="not null")
                {
                $req = "SELECT * FROM `rdv` WHERE $col is $val";
                }
                $res = $c->query($req);
                
                foreach ($res as $var) {
                //return new RDV($var[0],$var[1], $var[2], $var[3], $var[4], $var[5]);
              echo "$var[0],$var[1], $var[2], $var[3], $var[4], $var[5]";   
            }
        } 
            else {
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

$f=new Infirmier();
$f->ListerRDV();

?>