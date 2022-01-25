<?php
include('../../controller/Infirmier.php');
if (!empty($_GET['id'])) {
    $id = $_GET['id'];

<<<<<<< HEAD
    $inf = new Infirmier('#1cin', null, null, null, null, null, null, null, null);
=======
    $inf = new Infirmier($_SESSION['cin'], null, null, null, null, null, null, null, null);
>>>>>>> main
    $inf->SupprimerRDV($id, 'Id_rdv');
    header('location:rdvs.php');
}
