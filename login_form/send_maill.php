<?php
include("conx.php");
if(isset($_POST['submit'])){

    if(!empty($_POST['email']) && !empty($_POST['cemail'])){

        if(($_POST['email']) == ($_POST['cemail'])){  


                $mail = $_POST['email'];
                $req = "SELECT * FROM patient WHERE Email = '".$mail."' limit 1";
                $res = mysqli_query($connexion,$req);
                if(mysqli_num_rows($res)==1){


                        $requ = "SELECT Password FROM patient WHERE Email = '".$mail."' limit 1";
                        $resu = mysqli_query($connexion,$requ);
                        //$ss = mysqli_num_rows($resu);
                            $ss = mysqli_fetch_row($resu);
                            //echo $res;
        
                            $receiver = "$mail";
                            $subject = "Recuperation de mot de passe";
                            $body = "This is your password : $ss[0] ";
                            $sender = "From:Alamal.hcenter@gmail.com";

                            if(mail($receiver, $subject, $body, $sender)){
                                header('refresh: 5; url=https://mail.google.com/mail/');
                                echo "Email sent successfully to $receiver";
                            }else{
                                echo "Sorry, failed while sending mail!"; 
                            }

                          
                }else{
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

<?php
/*
}else{
                            echo "Erreur";
                        } 

 $dest = "simoelass4@gmail.com";
 $sujet = "Email de test";
 $corp = "U're hacked !!!";
 $headers = 'From: bu.esto.ump@gmail.comu' . "\r\n" .
          'Reply-To: bu.esto.ump@gmail.com' . "\r\n" .
          'MIME-Version: 1.0' . "\r\n" .
          'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
           
while(true)
{
    if (mail($dest, $sujet, $corp, $headers)) {
   echo "Email envoyé avec succès à $dest ...";
 } else {
   echo "Échec de l'envoi de l'email...";
 }
 
}
*/ 
?>