<?php



// --------------------------------------------
include('Employe.php');
require_once('myconnect.php');
// require_once('RDV.php');

class Infirmier extends Employe
{
    use myconnect;

    /**
     * show all the patients
     */
    public function afficherRDV()
    {
        try {

            return $this->ListerRDV("null", "Cin_Patient");
        } catch (Exception $ex) {
            echo "$ex";
        }
    }

    public function showCINs_AJAX()
    {
        try {
            $c = $this->connect();
            if ($c != null) {
                $req = "SELECT DISTINCT `CIN_patient` FROM `rdv`";
                $res = $c->query($req);
                return $res;
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }
    // checrcher si le patient exist pour obtenir le cin
    public function AjouterRDV(RDV $r)
    {
        $c = $this->connect();
        // $res = $this->find_Patient($r->cin_patient);
        // if ($res!=false)
        //  {
        $req = "INSERT INTO `rdv`( `Date_RDV`, `Heure_RDV`, `Objet`, `Cin_employe`, `Cin_patient`) VALUES " .
            "('$r->date_RDV','$r->heure_RDV','$r->objet','$this->CIN','$r->cin_patient');";
        // echo $req;
        $ress = $c->prepare($req);
        return $ress->execute();
        // }
        //     else
        //   echo "<script>cin non trouver</script>";
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
                if ($val === "null") {
                    $req = "SELECT * FROM `rdv` WHERE $col is not $val";
                }
                // echo $req;
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

    public function find_Patient($val, $col = "Cin_patient")
    {
        try {
            $c = $this->connect();
            if ($c != null) {
                $req = "SELECT * FROM `patient` WHERE $col ='$val'";
                return $c->query($req);
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }


    public function SupprimerRDV($value, $col = "CIN")
    {
        $c = $this->connect();
        if ($c != NULL) {
            $sql = "DELETE FROM  `rdv` WHERE $col = '$value'";
            $v = $c->prepare($sql);
            return  $v->execute();
        }
    }





    public function AjouterPatient($pat)
    {
        $c = $this->connect();
        if ($c != null) {
            $sql = "INSERT INTO patient (`Cin_patient`, `Nom_complet`, `Date_naissance`, `Addresse`, `Sexe`, `Tel`, `Email`, `Password`, `Historique`, `Cin_employe`) VALUES" .
                " ('$pat->CIN', '$pat->nom_complet', '$pat->date_naissance', '$pat->addresse', '$pat->sexe', '$pat->tel', '$pat->email', '$pat->password', '$pat->historique', '$this->CIN')";

            $query = $c->prepare($sql);
            return $query->execute();
        } else {
            echo "probleme de connexion";
            return false;
        }
    }
}
