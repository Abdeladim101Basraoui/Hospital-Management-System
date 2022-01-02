<?php
class Infirmier extends Employe
{

    public $con;
    public $req;
    /**
     * Default constructor
     */
<<<<<<< HEAD
    public function __construct($c, $nc, $dn, $adr, $sx, $tl, $eml, $pwr, $rol)
    {
        parent::__construct($c, $nc, $dn, $adr, $sx, $tl, $eml, $pwr, $rol);
        $con = new PDO("mysql:host=localhost;dbname=centresante", "b1sra0u1", "m@roc2OO1mark5edith");
=======
    public function __construct()
    {.
>>>>>>> soukaina
    }


    public function ModifierRDV($RDV)
    {
    }

    /**
     * @param  $RDV
     */
    public function SupprimerRDV($RDV)
    {
        // TODO implement here
    }

    /**
     * @param  $RDV
     */
    public function AjouterRDV($RDV)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function ListerRDV()
    {
        try {
            $c = $this->connect();
            if ($c != null) {
                $req = 'SELECT * FROM `rdv`';
                $res =$c->query($req);
                foreach($res as $var)
                return new RDV();
            } else
                echo "probleme in the ListerRDV Method";
        } catch (Exception $ex) {
            echo "$ex";
        }
    }

    /**
     * @param  $RDV
     */
    public function AfficherRDV($RDV)
    {
        try {
            $c = $this->connect();
            if ($c != null) {
                $req = 'SELECT `Id_rdv`, `Date_RDV`, `Heure_RDV`, `Objet`, `Cin_employe`, `Cin_patient` FROM `rdv` WHERE ' +
                    '`Id_rdv`=' . "$RDV" . '';
                $c->query($req);
                foreach ($c as $var) {
                    return new RDV($var[1], $var[2], $var[3], $var[4], $var[5], $var[6]);
                }

                # code...
            } else {
                echo "nothing in the RDV Table";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }

    /**
     * @param  $Patient
     */
    public function AjouterPatient(Patient $Patient)
    {
        $req = "INSERT INTO `` VALUES($Patient->nom_complet)";
    }

    /**
     * @param  $Patient
     */
    public function ModiferPatient($Patient)
    {
        // TODO implement here
    }

    /**
     * @param null $Patient
     */
    public function ChercherPatient(null $Patient)
    {
        req =  "SELECT * FROM `` WHERE $Patient->";
    }

    /**
     * 
     */
    public function ListerPatients()
    {
    }
}
