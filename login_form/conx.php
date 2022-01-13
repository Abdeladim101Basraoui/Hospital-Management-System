<?php

$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion, "centresante");

if(!$connexion){echo "Désolé"; exit;}

?>