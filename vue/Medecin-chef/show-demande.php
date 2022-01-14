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
include('../../controller/Medecin_Chef.php');
if(!isset($_GET['id']))
    header('Location: demandes.php');

$id = $_GET['id'];
$t = new Medecin_Chef($_SESSION['cin'],null,null,null,null,null,null,null,null);
$dem = $t->AfficherDemandeMat($id);

?>
<!DOCTYPE html>
<html lang="en">

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
                        <h4 class="page-title">Demande Materiel</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <?php
                        foreach ($dem as $v)
                            echo "
                                    <div class='row'>
                                        <div class='col-sm-6'>
                                            <div class='form-group'>
                                                <label>ID demande : <span class='text-primary'>$v[0]</span></label>
                                            </div>
                                        </div> 
                                    
                                        <div class='col-sm-12'>
                                            <div class='form-group'>
                                                <label>Date Demande :  <span>$v[1]<span></label>
                                            </div>
                                        </div>
                                                
                                        <div class='col-sm-12'>
                                            <div class='form-group'>
                                                <label>Date Besoin : <span>$v[2]</span></label>
                                            </div>
                                        </div>
                                        <div class='col-sm-12'>
                                            <div class='form-group'>
                                                <label>Etat : <span>$v[5]</span></label>
                                            </div>
                                        </div>
                                    </div>

                            ";
                            ?>
                        
                    </div>
                </div>
                <div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>ID</th>
										<th>Libelle</th>
										<th>Etat</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
        							
									
									$matdem = $t->ListerMaterielDemande($id);

									foreach($matdem as $p){

										echo "
										<tr>
											<td><i class='fa fa-hospital-o'></i> $p[0]</td>
											<td>$p[1]</td>
											<td>$p[2]</td>
											<td class='text-right'>
											<div class='row'>
												<div class='col-sm dropdown dropdown-action'>
													<a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
													<div class='dropdown-menu dropdown-menu-right'>
														<a class='dropdown-item' href='update-materiel.php?id=$p[0]'><i class='fa fa-pencil m-r-5'></i>Modifier Materiel</a>
													</div>
												</div>
											</div>
											</td>
										</tr>
										";
									}
                                    echo "
                                    </tbody>
                                </table>
                            </div>
                            ";
								?>

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


</html>
