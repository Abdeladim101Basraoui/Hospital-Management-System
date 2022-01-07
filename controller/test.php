
<?php
include('calendrier_RDV.php');
include('Infirmier.php');
foreach(calendrier_RDV::dateDispo()as $var){
    echo $var[0]."<br/>";
}
?>