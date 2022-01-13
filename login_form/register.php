<!doctype html>
<html lang="en">
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

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
            height: 104%;
        }
    </style>

</head>
<body>




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

    <div id="plo" class="bg order-1 order-md-2"  style=" background-image: url('images/canapé_cabinet_medical_design.jpg')";>


    <main class="my-form">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Register</div>
                            <div class="card-body">
                                <form name="my-form"  action="insert.php" method="POST">
                                    <div class="form-group row">
                                        <label for="full_name" class="col-md-4 col-form-label text-md-right">Full Name *</label>
                                        <div class="col-md-6">
                                            <input type="text" id="full_name" class="form-control" name="name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Cin *</label>
                                        <div class="col-md-6">
                                            <input type="text" id="email_address" class="form-control" name="cin" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Sexe *</label>
                                        <div class="col-md-6">
                                            <select name="sexe" id="" class="form-control" required>
                                                <option value="">...</option>
                                                <option value="">Male</option>
                                                <option value="">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email_address" class="col-md-4 col-form-label text-md-right">Date de naissance *</label>
                                        <div class="col-md-6">
                                            <input type="date" name="date" id="" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="user_name" class="col-md-4 col-form-label text-md-right">adresse</label>
                                        <div class="col-md-6">
                                            <input type="text" id="user_name" class="form-control" name="adresse">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="phone_number" class="col-md-4 col-form-label text-md-right">Phone Number *</label>
                                        <div class="col-md-6">
                                            <input type="text" id="phone_number" class="form-control" name="tel" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="present_address" class="col-md-4 col-form-label text-md-right">Email *</label>
                                        <div class="col-md-6">
                                            <input type="text" id="present_address" class="form-control" name="email" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Password *</label>
                                        <div class="col-md-6">
                                            <input type="password" id="permanent_address" class="form-control" name="pass" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="permanent_address" class="col-md-4 col-form-label text-md-right">Historique </label>
                                        <div class="col-md-6">
                                            <textarea name="Hist" id="permanent_address" class="form-control" cols="30" rows="4" placeholder="Quelle votre historique de maladie ?"></textarea>
                                        </div>
                                    </div>


                                        <div class="col-md-6 offset-md-4">
                                            <input type="submit" onsubmit="return validform()" name="submit" value="Register" class="btn btn-primary">
                                            
                                            
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