<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Login #6</title>
</head>

<body>

<?php
 /*   
    
    //print("Bonjour $name, $cin,$adresse, $tel, $email, $pass  ");

    $connexion=mysqli_connect("localhost","root","");
    mysqli_select_db($connexion, "centresante");

    if(!$connexion){echo "Désolé"; exit;}

    session_start();

    if(isset($_POST['submit'])){
        
        if(!empty($_POST['user']) && !empty($_POST['pass'])){

            $user=$_POST['user'];
            $pass=$_POST['pass'];

            $requete = "SELECT * FROM patient WHERE Email = '".$user."' AND Password = '".$pass."' limit 1";
            $resultat = mysqli_query($connexion,$requete);
            if(mysqli_num_rows($resultat)==1){
                header('Location: /Medilab/login_form/rendez_vous.php');
                exit();
                echo "done";
            }
            else{
                echo "Erreur detected retry";
            }
        }else{
            echo "all fields required";
        }

    }
    */    

?>


    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="  background-image: url('images/docteur-souriant-stethoscope_1154-36.jpg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Sign In</h3>
                            <p class="mb-4">Utiliser l'email et le mot de passe saisis lors de l'inscription</p>
                        </div>
                        <form action="conx_emp.php" method="POST">
                            <div class="form-group first">
                                <label for="username">Email</label>
                                <input type="text" class="form-control" id="username" name="user" >

                            </div>
                            <div class="form-group last mb-3">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="pass">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                            <input type="checkbox" checked="checked"/>
                            <div class="control__indicator"></div>
                        </label>
                            </div>

                            <input type="submit" name="submit" value="Log In" class="btn btn-block btn-primary">

                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>



    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>