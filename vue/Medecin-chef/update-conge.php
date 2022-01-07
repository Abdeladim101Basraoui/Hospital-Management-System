<?php
    include('../../controller/Medecin_Chef.php');
    $valider = $_GET['valide'];
    $id = $_GET['id'];
    echo $valider;

    $m = new Medecin_Chef(null,null,null,null,null,null,null,null,null);

    if($valider == 'oui')
    {
        $m->ValiderConge($id);
    }
    else
    {
        $m->RefuserConge($id);
    }
    header('Location: conges');