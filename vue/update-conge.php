<?php
    include('../controller/Employe.php');
    $annuler = $_GET['annuler'];
    $id = $_GET['id'];
    $role=$_GET['role'];

    $e = new Employe(null,null,null,null,null,null,null,null,null);

    if($annuler == 'oui')
    {
        $e->AnnulerConge($id);
    }
   if($role == "MC")
        header('Location: Medecin-Chef/show-conges');
   if($role == "M")
        header('Location: Medecin/show-conges');
   if($role == "I")
        header('Location: Infirmier/show-conges');
   if($role == "T")
        header('Location: Technicien/show-conges');
