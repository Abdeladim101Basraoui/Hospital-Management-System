<?php

declare(strict_types=1);


class Demande_Materiel
{
    public $num_demande;
    public $date_demande;
    public $date_besoin_materiel;
    public $cin_employe;
    public $cin_employe_technicien;
    public $etat_demande;


    public function __construct($dd,$dbm,$cnem,$cet,$ed)
    {
         $this->date_demande=$dd;
         $this->date_besoin_materiel=$dbm;
         $this->cin_employe=$cnem;
         $this->cin_employe_technicien=$cet;
         $this->etat_demande=$ed;
    }

}