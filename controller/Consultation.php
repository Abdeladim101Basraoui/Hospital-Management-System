<?php


class Consultation
{

    
    public $date_consultation;

    private $note_consultation;

    private $traitement;



    /**
     * Default constructor
     */
    public function __construct()
    {
        // ...
    }

}

try { $c= new PDO("mysql:host=localhost;dbname=centresante",$eml,$pwr);
    return $c;
        }
    catch (Exception $e)
   {return NULL;}
?>