<?php


class Consultation
{

    
    public $date_consultation;
    private $note_consultation;
    private $traitement;



    /**
     * Default constructor
     */
    public function __construct($date,$note,$trait)
    {
        $this->date_consultation = $date;
        $this->note_consultation = $note;
        $this->traitement = $trait;
    }

}


?>