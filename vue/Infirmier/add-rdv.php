<?php
include('../../controller/RDV.php');
include('../../controller/Infirmier.php');


// --- adding a function that deletes the past days untaked

// 
if (!empty($_POST['dater']) && !empty($_POST['heurer']) && !empty($_POST['obj'])) {
    $dater = $_POST["dater"];
    $heurer = $_POST["heurer"];
    $obj = $_POST["obj"];
    $cin = $_GET["cin"];


    //     $m = new Infirmier('B12345', null, null, null, null, null, null, null, null);

    //     $c = new RDV($dater, $heurer, $obj, $cin);
    //     if ($m->AjouterRDV($c))
    //         header('Location: rdvs');
    // } else {
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
    <link rel="stylesheet" type="text/css" href="../../assets/css/mystyle.css">
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
                        <h4 class="page-title">Add RDV</h4>
                    </div>
                </div>
                <!-- row add rdv -->

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post">
                            <div class="row">
                                <!-- show label and cin  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>CIN Patient : <span class="text-primary">
                                                <?php echo $_GET['cin']; ?>
                                            </span></label>
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Date RDV <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <!-- <input class="form-control" name="dater" type="text"> -->
                                            <div class="btn-group">
                                                <?php
                                                echo '<button type="button"  value="' . date('y-m-d') . '" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                    ' . date('y-m-d') . '
                                                                </button>';
                                                ?>
                                                <div class="dropdown-menu">
                                                    <?php
                                                    include('../../controller/calendrier_RDV.php');
                                                    $cc = new calendrier_RDV();
                                                    foreach ($cc->datesDispo() as $value) {
                                                        echo ' <a class="dropdown-item" href="#">' . $value[0] . '</a>';
                                                    }
                                                    ?>  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Heure RDV<span class="text-danger">*</span></label>
                                    <?php
                                    echo '<fieldset disabled>';
                                    ?>
                                    
                                    <div class="clock-icon">
                                        <!-- <input class="form-control" name="heurer" type="text"> -->
                                        <div class="btn-group">
                                            <?php
                                            echo '
                                                            <button type="button"  value="' . date('H:i') . '" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">*</span>
                                                            ' . date('H:i') . '
                                                            </button>';
                                            ?>

                                            <div class="dropdown-menu">
                                                <?php
                                                $cc = new calendrier_RDV();
                                                foreach ($cc->hourDispos(date('y-m-d')) as $value) {

                                                    echo ' <a class="dropdown-item" href="#">' . date("H:i", strtotime($value)) . '</a>';
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                   </fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>Objet</label>
                                            <div class="clock-icon">
                                                <textarea class="form-control" name="obj"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-t-20 text-center">
                                    <input type="submit" class="btn btn-primary" name="go" value="Create RDV">
                                    <?php

                                    if (isset($_POST['go'])) {

                                        // AjouterRDV  mlancer lesg
                                        echo '
                                    <div class="alert alert-success" role="alert">
                                    A simple success alert with <a href="rdvs.php?cin=' . $_GET['cin'] . '" class="alert-link">voir le RDV dans la liste</a>. Give it a click if you like.
                                  </div>';
                                    }
                                    ?>
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