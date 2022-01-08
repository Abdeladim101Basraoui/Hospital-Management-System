<?php
//     include('Infirmier.php');
//     // include_once('RDV.php');
// $f = new Infirmier('inf#1',null,null,null,null,null,null,null,null);
// $r =new RDV(null,date('y-m-d'),date('H:i'),"inserted from the code",null,'bl23456');
// $f->AjouterRDV($r);
// // if($f->AjouterRDV($r))
// // echo "good!";



//====================
include('myconnect.php');
include('calendrier_RDV.php');
$c = new calendrier_RDV();
foreach($c->datesDispo() as $var){
    echo $var[0];
}
?>
