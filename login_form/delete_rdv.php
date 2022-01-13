<?php
    include("conx.php");
    error_reporting(0);

    if(isset($_GET['delete'])){
            
            $id = $_GET['delete'];
            $query = "delete from rdv where Id_rdv = '$id'";

            $data = mysqli_query($connexion, $query);

            if($data){
                header('location: Gere_rdv.php');
            }
            else{
                echo "Erreur";
            }
    }



?>