<?php
class Infirmier extends Employe
{

    public $con ;
    public $req;

    /**
     * Default constructor
     */
    public function __construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol)
    {
        parent::__construct($c,$nc,$dn,$adr,$sx,$tl,$eml,$pwr,$rol);
        $con = new PDO("","","");
    }

    
    public function ModifierRDV( $RDV)
    {
      try{
          
      }catch(Exception $ex){
        echo "$ex";
      }
    }

    /**
     * @param  $RDV
     */
    public function SupprimerRDV( $RDV)
    {
        // TODO implement here
    }

    /**
     * @param  $RDV
     */
    public function AjouterRDV( $RDV)
    {
        // TODO implement here
    }

    /**
     * 
     */
    public function ListerRDV()
    {
        // TODO implement here
    }

    /**
     * @param  $RDV
     */
    public function AfficherRDV( $RDV)
    {
        // TODO implement here
    }

    /**
     * @param  $Patient
     */
    public function AjouterPatient( Patient $Patient )
    {
        $req = "INSERT INTO `` VALUES($Patient->nom_complet)";
    }

    /**
     * @param  $Patient
     */
    public function ModiferPatient( $Patient)
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
