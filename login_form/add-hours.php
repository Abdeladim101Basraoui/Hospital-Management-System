<?php
trait myconnect{
    public  $con;
     public static function connect()
     {
         try {
             $con = new PDO("mysql:host=localhost;dbname=centresante", "root", "");
             echo "<script>alert('connected');</script>";
             return $con;
         } catch (Exception $e) {
             echo "connection failed $e";
         }
     }
     public static function insertCalendar()
     {
         try {
             $c = self::connect();
             if ($c != null) {
                 for ($i = 8; $i < 17; $i++) {
                     for ($j = 0; $j < 4; $j+=3) {
                          $req = "INSERT INTO `calendrier_rdv` (`id_calendrier`, `Date_calendrier_RDV`, `Heure_Calendrier_RDV`, `id_rdv`) VALUES (NULL, '2022-01-09', '$i:".$j."0:00', NULL);";
                          $res =$c->prepare($req);
                          $res->execute();
                          
                     }
                 }
                 echo "<script>alert('added to database');</script>";
             }
         } catch (Exception $ex) {
             echo "$ex";
         }
     }
 }
 
class a{
    use myconnect;

    public static function insertCalendar($jj)
    {
        try {
            $c = self::connect();
            if ($c != null) {
                for ($i = 8; $i < 17; $i++) {
                    for ($j = 0; $j < 4; $j+=3) {
                         $req = "INSERT INTO `calendrier_rdv` (`id_calendrier`, `Date_calendrier_RDV`, `Heure_Calendrier_RDV`, `id_rdv`) VALUES (NULL, '2022-01-0$jj', '$i:".$j."0:00', NULL);";
                         $res =$c->prepare($req);
                         $res->execute();
                         
                    }
                }
                echo "<script>alert('added to database');</script>";
            }
        } catch (Exception $ex) {
            echo "$ex";
        }
    }
}
a::insertCalendar('13');
   
?>
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


}