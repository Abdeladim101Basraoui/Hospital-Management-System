<?php
session_start();
if(empty($_SESSION['role'])){
    header("Location: ../login.php");
}
else if(strtolower($_SESSION['role']) != 'medecin-chef')
{
    header('Location: ../redirect.php');
}
include('../../controller/front.php');
?>
<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>Alamal</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
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
				<a href="index.php" class="logo">
					<img src="../../assets/img/logo.png" width="35" height="35" alt=""> <span>AlAmal</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown ">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle" src="../../assets/img/user.jpg" width="40" alt="Admin">
							<span class="status online"></span></span>
                        <span><?PHP echo $_SESSION['nom'] ?></span>
                    </a>
                    <div class="dropdown-menu">
						<a class="dropdown-item" href="../logout.php">Logout</a>
					</div>
                </li>
            </ul>

        </div>
                        
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Patients </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="patients.php">Patients List</a></li>
								<li><a href="consultations.php">Mes Consultation</a></li>
							</ul>
						</li>    
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Materiels </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="materiels.php">Materiels List</a></li>
								<li><a href="demandes.php">Demandes de Materiels</a></li>
							</ul>
						</li>  
                        <li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Employes </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
								<li><a href="employes.php">Employes List</a></li>
								<li><a href="conges.php">Demandes Conge</a></li>
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
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-user-md" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php $s = new Stats(); 
                                $noMed = $s->NoMedecin();
                                foreach($noMed as $no){
                                    echo $no[0];
                                }
                                ?></h3>
								<span class="widget-title1">Medecins<i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3><?php $s = new Stats(); 
                                $noInf = $s->NoInfirmier();
                                foreach($noInf as $no){
                                    echo $no[0];
                                }
                                ?></h3>
								<span class="widget-title1">Infirmier <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php $s = new Stats(); 
                                $noPat = $s->NoPatient();
                                foreach($noPat as $no){
                                    echo $no[0];
                                }
                                ?></h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg1"><i class="fa fa-book"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3><?php $s = new Stats(); 
                                $noMat = $s->NoMat();
                                foreach($noMat as $no){
                                    echo $no[0];
                                }
                                ?></h3>
                                <span class="widget-title1">Materiels <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Nouveau Demandes Congé </h4> <a href="conges.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>
                                            <?php
                                                $s = new Stats(); 
                                                $TopPat = $s->NewCong();
                                                foreach($TopPat as $pat){
                                                    echo "
                                                    <tr>
                                                        <td>
                                                            <img width='28' height='28' class='rounded-circle' src='../../assets/img/user.jpg' alt=''> 
                                                            <h2>$pat[0]</h2>
                                                        </td>
                                                        <td>$pat[1]</td>
                                                        <td>$pat[2]</td>
                                                    </tr>
                                                    ";
                                                }
                                            ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md-6 col-lg-8 col-xl-8">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title d-inline-block">Nouveau Patients </h4> <a href="patients.php" class="btn btn-primary float-right">View all</a>
							</div>
							<div class="card-block">
								<div class="table-responsive">
									<table class="table mb-0 new-patient-table">
										<tbody>
                                            <?php
                                                $s = new Stats(); 
                                                $TopPat = $s->NewPatients();
                                                foreach($TopPat as $pat){
                                                    echo "
                                                    <tr>
                                                        <td>
                                                            <img width='28' height='28' class='rounded-circle' src='../../assets/img/user.jpg' alt=''> 
                                                            <h2>$pat[5]</h2>
                                                        </td>
                                                        <td>$pat[1]</td>
                                                        <td>$pat[2]</td>
                                                        <td>$pat[3]</td>
                                                    </tr>
                                                    ";
                                                }
                                            ?>
											
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery-3.2.1.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.slimscroll.js"></script>
    <script src="../../assets/js/Chart.bundle.js"></script>
    <script src="../../assets/js/chart.js"></script>
    <script src="../../assets/js/app.js"></script>

</body>


<!-- index22:59-->
</html>