<?php 

include("conx.php");
session_start();
$cinl = $_SESSION['test'];
    $alo = $_SESSION['dat'];
    $ano = $_SESSION['tert'];


    //$dates=$_POST['datee'];
    
    

        $obj = $_POST['objet'];
        $heure = $_POST["rdv_heure"];
        $date = $_POST['new_date'];
        //$heur = $_POST['rdv_heure'];

        //session_start();
        //$_SESSION['alt'] = $obj;
        //$_SESSION['dat'] = $dat;
        //$_SESSION['heur'] = $heur;

        $requete = "INSERT INTO rdv (Date_RDV, Heure_RDV, Objet, Cin_patient) VALUES('$date', '$heure', '$obj', '$cinl')";

        $resultat = mysqli_query($connexion,$requete);
        if($resultat){
            
            //header('Location: /Medilab/login_form/print.php');
            //exit();}
            echo "$obj";
            echo "$heure";
            echo "$date";
        }
        else{
            echo "Erreur";
        }


?>