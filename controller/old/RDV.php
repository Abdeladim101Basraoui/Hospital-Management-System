<?php

declare(strict_types=1);


class RDV
{
    public $date_RDV;
    public $heure_rdv;
    public $objet;
    public $id_infirmiere;
    public $cin_patient;
    private $id_RDV;

    /**
     * Default constructor
     */
    public function __construct($date, $time, $obj,$cin)
    {
        $this->date_RDV = $date;
        $this->heure_RDV = $time;
        $this->objet = $obj;
        $this->cin_patient = $cin;
    }
}
