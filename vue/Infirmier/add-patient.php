<?php
include('../../controller/Patient.php');
include('../../controller/Infirmier.php');
if (!empty($_POST['nomc']) && !empty($_POST['cin']) && !empty($_POST['daten']) && !empty($_POST['tel']) && !empty($_POST['addr']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['gender'])) {
    $cin = $_POST["cin"];
    $nomc = $_POST["nomc"];
    $datn = $_POST["daten"];
    $addr = $_POST["addr"];
    $sexe = $_POST["gender"];
    $tel = $_POST["tel"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $his = $_POST["hist"];

    $m = new Infirmier('#1cin', null, null, null, null, null, null, null, null);
    $p = new Patient($cin, $nomc, $datn, $addr, $sexe, $tel, $email, $pass, $his);
    echo "<script>alert('".$m->AjouterPatient($p)."');</script>";
    // header('Location: patients.php');
} else {
    echo "not really";
}

?>
<!DOCTYPE html>
<html lang="en">


<!-- add-patient24:06-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>Alamal</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.min.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="#" class="logo">
                    <img src="../../assets/img/logo.png" width="35" height="35" alt=""> <span>AlAmal</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown ">
                    <a href="#">
                        <span class="user-img"><img class="rounded-circle" src="../../assets/img/user.jpg" width="40" alt="Admin">
                            <span class="status online"></span></span>
                        <span>Infirmier</span>
                    </a>
                </li>
            </ul>

        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user"></i> <span> Patients </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="patients.php">Patients List</a></li>
                                <li><a href="add-patient.php">Ajouter Patient</a></li>
                                <li><a href="rdvs.php">RDV</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="#"><i class="fa fa-user"></i> <span> Conge </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="add-conge.php">Demander Conge</a></li>
                                <li><a href="show-conges.php">Mes demandes</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Patient</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="POST">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Nom Complet <span class="text-danger">*</span></label>
                                        <input class="form-control" name="nomc" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>CIN <span class="text-danger">*</span></label>
                                        <input class="form-control" name="cin" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date de Naissance</label>
                                        <!-- <div class="cal-icon"> -->
                                        <input type="date" name="daten" class="form-control">
                                        <!-- </div> -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" name="email" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" name="pass" type="password">
                                    </div>
                                </div>



                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Addresse</label>
                                                <input type="text" name="addr" class="form-control ">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Télephone </label>
                                        <input class="form-control" name="tel" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group gender-select">
                                        <label class="gen-label">Sexe:</label>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" class="form-check-input">Femme
                                            </label>
                                        </div>
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" name="gender" class="form-check-input">Homme
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Historique Maladie</label>
                                        <div class="">
                                            <textarea type="text" name="hist" class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="m-t-20 text-center">
                                <input type="submit" class="btn btn-primary" value="Create Patient">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <script src="../../assets/js/select2.min.js"></script>
    <script src="../../assets/js/moment.min.js"></script>
    <script src="../../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../../assets/js/app.js"></script>
</body>


<!-- add-patient24:07-->

</html>