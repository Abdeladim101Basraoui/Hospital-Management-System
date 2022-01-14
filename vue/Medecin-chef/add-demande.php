<?php
session_start();
if(empty($_SESSION['role'])){
    header("Location: ../login.php");
}
else if(strtolower($_SESSION['role']) != 'medecin-chef')
{
    header('Location: ../redirect.php');
}
include('../../controller/Demande_Materiel.php');
include('../../controller/Materiel.php');
include('../../controller/Materiel_Demande.php');
include('../../controller/Medecin_Chef.php');
if(!empty($_POST['ddm'])&&!empty($_POST['dbm'])&&!empty($_POST['mat']))
{
    $dd = $_POST["ddm"];
    $dbm = $_POST["dbm"];
    $mat =  $_POST['mat'];
    
    $t = new Medecin_Chef($_SESSION['cin'],null,null,null,null,null,null,null,null);
    
    $m= new Demande_Materiel($dd,$dbm,null,null,null);
    //$md = new Materiel_Demande();
    
    $r =$t->DemandeMateriel($m);
    
    foreach($r as $id){
        foreach($mat as $v){
            $t->AjouterMaterielDemande($v[0],$id[0]);
        }
    }
    header('Location: demandes.php');
}
else{
   echo "<script>alert('entrez tous les valeurs');</script>";
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
				<a href="index.php" class="logo">
					<img src="../../assets/img/logo.png" width="35" height="35" alt=""> <span>AlAmal</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
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
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Materiel</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Date Demande <span class="text-danger">*</span></label>
                                        <div class="cal-icon">
                                            <input class="form-control" name="ddm" type="text">
                                        </div>
                                    </div>
                                </div>
                                        
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Date Besoin Materiel</label>
                                        <div class="cal-icon">
                                            <input type="text" name="dbm" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="mat">Materiels</label>
                                        <div>
                                            <select class="js-example-basic-multiple col-sm-12" name="mat[]" multiple="multiple">
                                            <?php
                                            $t = new Medecin_Chef($_SESSION['cin'],null,null,null,null,null,null,null,null);
                                            $mat = $t->ListerMateriel();
                                                foreach($mat as $v){
                                                    echo "<option value='$v[0]'>$v[1]</option>";
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="m-t-20 text-center">
                        <input type="submit" class="btn btn-primary" value="Create Demande">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="../../assets/js/jquery-3.2.1.min.js"></script>
    <script src="../../assets/js/script.js"></script>
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
