<?php

class Materiel
{

  
    public  $libelle_materiel;
    public $etat_materiel;


    public function __construct($lbl,$etat)
    {
        $this->libelle_materiel=$lbl;
        $this->etat_materiel=$etat;
    }

}
?>