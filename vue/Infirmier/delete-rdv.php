<?php
    include('../../controller/Infirmier.php');
    $id = $_GET['id'];
    
    $i = new Infirmier(null,null,null,null,null,null,null,null,null);

    
        $i->SupprimerRDV($id);

        header('Location: rdvs.php');
