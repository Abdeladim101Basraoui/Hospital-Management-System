<?php

class Materiel_Demande
{
    public $id_materiel;

    public $id_demande;


    public function __construct($idm,$idd)
    {
        $this->id_materiel=$idm;
        $this->id_demande=$idd;
    }

}
?>