<?php
if (!empty($_GET['id'])) {
    $cin_pat = $_GET['id'];
    $inf = new Infirmier('#1cin', null, null, null, null, null, null, null, null);
    $inf->SupprimerRDV($cin_pat);
    header('location:rdvs.php');
}
