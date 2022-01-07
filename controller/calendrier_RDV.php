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
        // ...
    }

    public static function dateDispo()
    {
        try {
            $dates = array();
            $c = Infirmier::connect();
            $x = 0;
            if ($c != null) {
                $res = $c->query("SELECT `Date_calendrier_RDV`, `Heure_Calendrier_RDV`FROM `calendrier_rdv` WHERE id_rdv is null");
                foreach ($res as $var) {
                    $dates[] = array($var[0], $var[1]);
                    echo $dates[$x][0]." ===== ".$dates[$x][1]."\n";
                    $x++;
                }
            }
        } catch (Exception $th) {
            echo "$th";
        }
    }
}
