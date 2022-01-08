<?php
//  include('myconnect.php');
include('Infirmier.php');
include_once('RDV.php');
$f = new Infirmier(null,null,null,null,null,null,null,null,null);
$r =new RDV(null,date('y-m-d'),date('H:i:s'),"inserted from the code",'inf#1','bl23456');

if ($f->find_Pateint('h52855')) {
    echo "is here";}
else
echo "no not here";

?>
