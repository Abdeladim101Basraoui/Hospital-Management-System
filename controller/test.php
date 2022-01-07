
<?php
include('calendrier_RDV.php');
include('Infirmier.php');
foreach(calendrier_RDV::hourDispos('2022-01-08') as $var){
    echo $var."<br/>";
}
   
?>