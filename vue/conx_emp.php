<?php

include("conx.php");

    if(isset($_POST['submit'])){
        
        if(!empty($_POST['user']) && !empty($_POST['pass'])){

                $mail="infermerie@Alamal.com";
                $passw="infermerie";

                if(($_POST['user']==$mail)&&($_POST['pass']==$passw)){

                    $sql="SELECT Cin_employe, Role FROM employe WHERE email = 'infermerie@Alamal.com'";
                    include("sess.php");

                    //session_start();
                    //$_SESSION['utilisateur']=$_POST['user'];
                    header('location: infermiere.php');
                }else{

                    $mail="medecin@Alamal.com";
                    $passw="medecin";

                    if(($_POST['user']==$mail)&&($_POST['pass']==$passw)){
                        
                        $sql="SELECT Cin_employe, Role FROM employe WHERE email = 'medecin@Alamal.com'";
                        include("sess.php");
                        //session_start();
                        //$_SESSION['utilisateur']=$_POST['user'];
                        header('location: medecin.php');
                    }else{

                        $mail="technicien@Alamal.com";
                        $passw="technicien";

                        if(($_POST['user']==$mail)&&($_POST['pass']==$passw)){

                            $sql="SELECT Cin_employe, Role FROM employe WHERE email = 'technicien@Alamal.com'";
                            include("sess.php");
                            //session_start();
                            //$_SESSION['utilisateur']=$_POST['user'];
                            header('location: technicien.php');
                        }else{    
                        
                            $mail="medecin_chef@Alamal.com";
                            $passw="medecin_chef";

                            if(($_POST['user']==$mail)&&($_POST['pass']==$passw)){

                                $sql="SELECT Cin_employe, Role FROM employe WHERE email = 'medecin_chef@Alamal.com'";
                                include("sess.php");   

                                //session_start();
                                //$_SESSION['utilisateur']=$_POST['user'];
                                header('location: medecin_chef.php');
                            }else{
                                echo "Erreur";
                            }
                        }   
                    }          
                }

        }else{
            echo "all fields required";
        }

    }
?>