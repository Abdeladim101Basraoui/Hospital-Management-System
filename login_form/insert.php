<?php
    
    
    //print("Bonjour $name, $cin,$adresse, $tel, $email, $pass  ");

    $connexion=mysqli_connect("localhost","root","");
    mysqli_select_db($connexion, "centresante");

    if(!$connexion){echo "Désolé"; exit;}

    
    

    if(isset($_POST['submit'])){
        
        
            $name = $_POST['name'];
            $cin = $_POST['cin'];
            $sexe = $_POST['sexe'];
            $date = $_POST['date'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $hist = $_POST['Hist'];

            session_start();
            $_SESSION['test'] = $cin;
            $_SESSION['pass'] = $pass;
            $_SESSION['nom'] = $name; 
            $_SESSION['tel'] = $tel;
            $_SESSION['mail'] = $email;
            $_SESSION['date'] = $date;
            
            //echo $_SESSION['test'];

            $requete = "INSERT INTO patient (Cin_patient, Nom_complet, Date_naissance, Addresse, Sexe, Tel, Email, Password, Historique) VALUES('$cin', '$name', '$date', '$adresse', '$sexe', '$tel', '$email', '$pass', '$hist')";
            
            $resultat = mysqli_query($connexion,$requete);
            if($resultat){header('Location: /Medilab/login_form/login.php');
                exit();}
            else{
                echo "Erreur";
            }

    }
        
?>

