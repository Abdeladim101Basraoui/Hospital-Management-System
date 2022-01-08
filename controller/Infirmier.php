<?php
#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



// --------------------------------------------
include('Employe.php');
require_once('myconnect.php');

class Infirmier extends Employe
{
    use myconnect;
  
    /**
     * show all the patients
     */
    public function afficherRDV()
    {
        try {

          return $this->ListerRDV("not null", "Cin_Patient");
        } catch (Exception $ex) {
            echo "$ex";
        }
    }


    /**
     * @param  $col = column name
     * @param  $val = value to search for
     */
    public function ListerRDV($val, $col = "Cin_patient")
    {
        $tbl = array();

        try {
            $c = $this->connect();
            if ($c != null) {
                $req = "SELECT * FROM `rdv` WHERE $col='$val'";
                if ($val === "null" || $val === "not null") {
                    $req = "SELECT * FROM `rdv` WHERE $col is $val";
                }
                $res = $c->query($req);
                return $res;
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }


    public function ListerPatients()
    {
        $c = $this->connect();
        if ($c != null) {
            return $c->query("SELECT * FROM `patient`");
        }
    }



// checrcher si le patient exist pour obtenir le cin
    public function AjouterRDV($r)
    {
        $c = $this->connect();
   
    }
//     public function SupprimerRDV($id)
//     {
//         $c = self::connect();
//         if ($c != NULL) {
//             $sql = "DELETE FROM rdv WHERE Id_rdv = '$id'";
//             $v = $c->prepare($sql);
//             $v->execute();
//             return true;
//         }
//     }





//     public function AjouterPatient($pat)
//     {
//         $c = self::connect();
//         if ($c != null) {
//             $sql = "INSERT INTO patient (Cin_patient, Nom_complet, Date_naissance, Addresse, Sexe, Tel, Email, Password, Historique, Cin_employe) VALUES ('$pat->CIN', '$pat->nom_complet', '$pat->date_naissance', '$pat->addresse', '$pat->sexe', '$pat->tel', '$pat->email', '$pat->password', '$pat->historique', '$this->CIN')";
//             $query = $c->prepare($sql);
//             $query->execute();
//             return true;
//         } else {
//             echo "probleme de connexion";
//             return false;
//         }
//     }

//     // /**
//     //  * @param  $Patient
//     //  */
//     // public function ModifierPatient($Patient)
//     // {
//     //     try {
//     //         $c = self::connect();
//     //         if ($c != NULL) {
//     //             $sql = "";
//     //             $v = $c->prepare($sql);
//     //             $v->execute();
//     //             return true;
//     //         }
//     //     } catch (Exception $th) {
//     //         echo "$th";
//     //     }
//     // }
}
