<?php
#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
include('../../controller/RDV.php');
include('../../controller/Infirmier.php');
include('../../controller/calendrier_RDV.php');
$cc = new calendrier_RDV();

// --- adding a function that deletes the past days untaked
$cc->weeklyDelete();
// 
$cin = $_GET["cin"];
$date = date('y-m-d');
$hour = date('H:i');
$hours = null;


// if (!empty($_POST['dater']) && !empty($_POST['heurer']) && !empty($_POST['obj'])) {

// $obj = $_POST["obj"];
// $cin = $_GET["cin"];


//     $m = new Infirmier('B12345', null, null, null, null, null, null, null, null);

//     $c = new RDV($dater, $heurer, $obj, $cin);
//     if ($m->AjouterRDV($c))
//         header('Location: rdvs');
// } else {
// }

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
                                <!-- TODO :show label and cin  -->
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>CIN Patient : <span class="text-primary">
                                                <?php echo $cin ?>
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
                                                echo '<button type="button"  value="' . $date . '" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                    <span class="sr-only">Toggle Dropdown</span>
                                                                    ' . $date . '
                                                                </button>';
                                                ?>
                                                <div class="dropdown-menu" id="drop-date">
                                                    <?php
                                                    foreach ($cc->datesDispo() as $value) {
                                                        echo ' <a class="dropdown-item c-date" href="add-rdv.php?cin=' . $cin . '&date=' . $value[0] . '">' . $value[0] . '</a>';
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
                                    echo '<fieldset id="field">';
                                    ?>

                                    <div class="clock-icon">
                                        <!-- <input class="form-control" name="heurer" type="text"> -->
                                        <div class="btn-group">
                                            <?php
                                            echo '
                                                            <button type="button"  value="' . $hour . '" class="btn btn-lg btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span class="sr-only">*</span>
                                                            ' . $hour . '
                                                            </button>';
                                            ?>

                                            <div class="dropdown-menu">
                                                <?php
                                                if (!empty($_GET['date']) && !empty($_GET['cin'])) {
                                                    $date = $_GET['date'];
                                                    // $hours = $cc->hourDispos($date);
                                                    foreach ($cc->hourDispos($date) as $value) {
                                                        //value ="add-rdv.php?cin=$cin&date=' . $date . '&hours=' . $value . '"
                                                        echo ' <a class="dropdown-item" ' .
                                                            // date("H:i", strtotime($value)) .
                                                            'href="add-rdv.php?cin=' . $cin . '&date=' . $date . '&hours=' . $value . '">'
                                                            . date("H:i", strtotime($value)) .
                                                            '</a>';
                                                    }
                                                    $hours = $_GET['hours'];
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
                                    <?php

                                    echo '<input type="hidden" name="cin" value="' . $cin . '">';
                                    echo '<input type="hidden" name="date" value="' . $date . '">';
                                    echo '<input type="hidden" name="hours" value="' . $hours . '">';

                                    ?>
                                    <input type="submit" name="go" class="btn btn-primary" value="Create RDV">


                                    <?php

                                    if (!empty($_POST['go']) && $hours != null) {

                                        // TODO: validate the input and add the appointement
                                        // $date = null;
                                        $inf = new Infirmier('#1cin', null, null, null, null, null, null, null, null);
                                        $rdv = new RDV(null, $date, $hours, $_POST['obj'], $inf->CIN, $cin);
                                        if ($inf->AjouterRDV($rdv)) {
                                            echo '
                                            <div class="alert alert-success" role="alert">
                                        very well! <a href="rdvs.php?cin=' . $cin . '" class="alert-link"> check it out!</a>
                                      </div>';
                                        }
                                    } 
                                    else if($hours==null){
                                        echo '
                                    <div class="alert alert-danger" role="alert">
                                nothing is set yet son!!     Give it a <a href="#drop-date" class="alert-link dropit"> retry.</a>
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
    <!-- <script src="../../assets/js/date&hour.js" defer></script> -->
    <!-- <script>
    //just a test
    // using the test
    $('#drop-date a').on('click', function(){
    // $('#dropdate a').val($(this).text());
// the best way to add a DOM attribute with jquery is to use prop
    $('#field').prop('disabled',false);
    // alert('clicked');
});
</script> -->

    <script>

    </script>
</body>


<!-- add-patient24:07-->

</html>