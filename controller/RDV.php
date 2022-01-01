<?php

declare(strict_types=1);


class RDV
{

    public $date_RDV;
    public $heure_rdv;
    public $objet;
    public $id_infirmiere;
    public $etat_RDV;

    /**
     * Default constructor
     */
    public function __construct($date,$time,$obj,$id_inf,$stat)
    {
        $this->date_RDV = $date;
        $this->heure_RDV = $time;
        $this->objet = $obj;
        $this->id_infirmiere = $id_inf;
        $this->etat_RDV = $stat;
    }
}
