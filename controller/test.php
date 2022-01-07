<?php

include('Infirmier.php');
$f = new Infirmier();
// foreach($f->ListerRDV('h52855') as $var){
//     echo $var;
// }
$f->ListerRDV('h52855');
?>