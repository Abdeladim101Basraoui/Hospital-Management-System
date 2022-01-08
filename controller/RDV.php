<?php

declare(strict_types=1);


class RDV
{
    private $id_RDV;
    public $date_RDV;
    public $heure_rdv;
    public $objet;
    public $cin_emp;
    public $cin_patient;

    /**
     * Default constructor
     */
    public function __construct($id_rdv, $date, $time, $obj, $cin_employe, $cin_patient)
    {
        $this->id_RDV = $id_rdv;
        $this->date_RDV = $date;
        $this->heure_RDV = $time;
        $this->objet = $obj;
        $this->cin_emp = $cin_employe;
        $this->cin_patient = $cin_patient;
    }
}
