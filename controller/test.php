<?php

include('Infirmier.php');
function show_doctors()
{
    try {
        $c = Infirmier::connect();
        if ($c != null) {
            //   $res =$c->query("SELECT COUNT(*)  FROM `medecin`");
            //   echo "<script>alert($res)</script>";
        }
    } catch (Exception $th) {
        echo "<script>alert($th);</script>";
    }
}
$F = new Infirmier(null,null,null,null,null,null,null,null,null);
foreach($F->afficherRDV() as $g)
{
    
}


?>