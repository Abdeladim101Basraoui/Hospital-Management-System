<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../../assets/fonts/icomoon/style.css">

    <link rel="stylesheet" href="../../assets/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>Login</title>
</head>

<body>
<?php
session_start();
include("../controller/Employe.php");

    if(isset($_POST['submit'])){
        
        if(!empty($_POST['user']) && !empty($_POST['pass'])){

            $e = new Employe(null,null,null,null,null,null,null,null,null);
            $_SESSION['cin'] = $e->se_connecter($_POST['user'],$_POST['pass']);
            $_SESSION['role'] = $e->getRole($_SESSION['cin']);
            $_SESSION['nom'] = $e->getNom($_SESSION['cin']);
            header("Location: redirect.php");
        }          
    }
?>

    <div class="d-lg-flex half">
        <div class="bg order-1 order-md-2" style="  background-image: url('../assets/img/docteur-souriant-stethoscope.jpeg');"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7">
                        <div class="mb-4">
                            <h3>Sign In</h3>
                            <p class="mb-4">Utiliser l'email et le mot de passe donné par votre administrateur</p>
                        </div>
                        <form method="POST">
                            <div class="form-group first">
                                <input type="text" class="form-control" id="username" name="user" placeholder="Email" >

                            </div>
                            <div class="form-group last mb-3">
                                <input type="password" class="form-control" id="password" name="pass" placeholder="Password">

                            </div>

                            <div class="d-flex mb-5 align-items-center">
                                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                            <input type="checkbox" checked>
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



    <script src="../assets/js/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
</body>

</html>