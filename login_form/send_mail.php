<?php

$connexion=mysqli_connect("localhost","root","");
mysqli_select_db($connexion, "centresante");

if(!$connexion){echo "Désolé"; exit;}


if(isset($_POST['submit'])){
        
    if(!empty($_POST['email']) && !empty($_POST['cemail'])){

        if(($_POST['email']) == ($_POST['cemail'])){    
        
            $mail = $_POST['email'];

            $requete = "SELECT * FROM patient WHERE Email = '".$mail."' limit 1";
            
            $req = "SELECT Password FROM patient WHERE Email = '".$mail."' limit 1";


            $resultat = mysqli_query($connexion,$requete);
            if(mysqli_num_rows($resultat)==1){


                $receiver = "$mail";
                $subject = "Recuperation de mot de passe";
                $body = "This is your password is $req ";
                $sender = "From:Alamal.hcenter@gmail.com";
                if(mail($receiver, $subject, $body, $sender)){
                    echo "Email sent successfully to $receiver";
                }else{
                    echo "Sorry, failed while sending mail!";
                }

            }
            else{
                echo "Email introuvable";
            }
        }else{
            echo "les emails ne sont pas les meme";
        }    
    }else{
        echo "all fields required";
    }
}    
?>