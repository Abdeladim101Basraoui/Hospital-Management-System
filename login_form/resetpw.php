<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <script type="text/javascript" src="./js/logup.js"></script>
    <link rel="stylesheet" href="./css/logup.css">
    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>AL AMAL</title>

    <style>
        #plo{
            height: 92.2%;
        }
    </style>

</head>
<body>

<?php
/*    
    
    //print("Bonjour $name, $cin,$adresse, $tel, $email, $pass  ");

    $connexion=mysqli_connect("localhost","root","");
    mysqli_select_db($connexion, "app");

    if(!$connexion){echo "Désolé"; exit;}
    //if(!mysqli_select_db($connexion,''))onsubmit="return validform()"
    if(isset($_POST['submit'])){
        
        if(!empty($_POST['name']) && !empty($_POST['cin']) && !empty($_POST['adresse']) 
        && !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['pass'])){

            $name = $_POST['name'];
            $cin = $_POST['cin'];
            $adresse = $_POST['adresse'];
            $tel = $_POST['tel'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            $requete = "INSERT INTO patient (cin, nom, adresse, email, password, Tel) VALUES('$cin', '$name', '$adresse', '$email', '$pass', '$tel')";
            
            $resultat = mysqli_query($connexion,$requete);
            if($resultat){echo "Done";}
            else{
                echo "Erreur";
            }
        }else{
            echo "all fields required";
        }

    }           <--!--li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li-->
*/        
?>



<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">AL AMAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
                
            </ul>

        </div>
        </div>
    </nav>

    <div id="plo" class="bg order-1 order-md-2"  style=" background-image: url('images/canapé_cabinet_medical_design.jpg')">


    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Forgot your password?</div>
                            <div class="card-body">
                                <form name="my-form"  action="send_maill.php" method="POST">
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Entre Email</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="email">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Confirme Email</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="cemail">
                                        </div>
                                    </div>



                                        <div class="col-md-6 offset-md-4">
                                        <p><input type="submit" onsubmit="return validform()" name="submit" value="Recover" class="btn btn-primary"></p>  
                                        <p><a href="Register.php">Create an Account!</a><br>
                                        Already have an account? <a  href="login.php">Login!</a>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>    

</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>