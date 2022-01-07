<?php

class calendrier_RDV
{
    public $date_calendrier;
    public $id_RDV;
    public $heure_calendrier;

    /**
     * Default constructor
     */
    public function __construct()
    {

    }
/**
 * return the hours dispo for the date selected by the user
*/
    public static function hourDispos($dates)
    {
        try {
            $hours = array();
            $c = Infirmier::connect();
            if ($c != null) {
                $res = $c->query("SELECT `Heure_Calendrier_RDV`FROM `calendrier_rdv` WHERE id_rdv is null and Date_calendrier_RDV = '$dates'");
                foreach ($res as $var) {
                 $hours[]=$var[0]; 
                }
                return $hours;
            }
        } catch (Exception $th) {
            echo "$th";
        }
    }


    /**
     * return the dates dispo in the calendar
     */
    public static function datesDispo()
    {
        try {
            $dates = array();
            $c = Infirmier::connect();
            if ($c != null) {
                $res = $c->query("SELECT DISTINCT Date_calendrier_RDV from calendrier_rdv");
                foreach ($res as $var) {
                  $dates[] = $var[0];
                }
                return $dates;
            }
        } catch (Exception $th) {
            echo "$th";
        }
    }

// update the PK key function
}
