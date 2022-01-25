<?php
include('../../controller/Infirmier.php');
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    $inf = new Infirmier($_SESSION['cin'], null, null, null, null, null, null, null, null);
    $inf->SupprimerRDV($id, 'Id_rdv');
    header('location:rdvs.php');
}
