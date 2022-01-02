<?php


class Consultation
{
    public $id_consultation;
    public $date_consultation;
    public $note_consultation;
    public $traitement;
    public $cin_patient;



    /**
     * Default constructor
     */
    public function __construct($date,$note,$trait,$cin)
    {
        $this->date_consultation = $date;
        $this->note_consultation = $note;
        $this->traitement = $trait;
        $this->cin_patient = $cin;
    }

}


?>