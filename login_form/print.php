<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


 
    
    <!-- Template Main CSS File -->
    <link href="../assets/css/style.css" rel="stylesheet">
    

    <style>
        #alo{
            margin-left: 70%;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#"><h4>AL AMAL</h4></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link alo" href="rendez_vous.php"><h4> Accueil</h4></a>
                </li>
            </ul>
        </div>
        </div>
    </nav><br>
    
       
        <div class="container">
            <h1>Confirmation de rendez-vous</h1>
        </div>

        <hr>
        <div class="alert alert-success container" role="alert">
        <img src="images/valide_rdv.JPG" height="20" width="20" alt=""> &nbsp votre rendez-vous a bien été enregistré
        </div>
        <br>
        <?php

//print("Bonjour $obj, $dat, $heur");

include("conx.php");

session_start();
$cinl = $_SESSION['test'];
$name = $_SESSION['nom'];
$tel = $_SESSION['tel'];
$email = $_SESSION['mail'];
$date = $_SESSION['date'];

$obj = $_SESSION['alt'];
$dat = $_SESSION['dat'];
$heure = $_SESSION['heur'];

?>    
        <table class="container" >
            <tr>
                <td><p>Nom : </p></td><td><?php echo "$name" ?></td>
            </tr>
            <tr>
                <td><p>Cin : </p></td><td><?php echo "$cinl" ?></td>
            </tr>
            <tr>
                <td><p>Tel : </p></td><td><?php echo "$tel" ?></td>
            </tr>
            <tr>
                <td><p>Email : </p></td><td><?php echo "$email" ?></td>
            </tr>
            <tr>
                <td><p>Date de naissance : </p></td><td><?php echo "$date" ?></td>
            </tr>
            <tr>
                <td><p>Nature de rendez-vous : </p></td><td><?php echo "$obj" ?></td>
            </tr>
            <tr>
                <td><p>Date : </p></td><td><?php echo "$dat" ?></td>
            </tr>
            <tr>
                <td><p>Heure : </p></td><td><?php echo "$heure" ?></td>
            </tr>
            <br>
        </table>

        <?php 
            echo "<p id='imprimer'><a href='' onclick='window.print(); 
            return false;'>Imprimer";
            ?>
        <br><br>    
        <img src="images/signature.png" height="120" width="120" id="alo" alt="">
</body>
</html>