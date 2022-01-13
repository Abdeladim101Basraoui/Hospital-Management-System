<?PHP
session_start();
if(empty($_SESSION['cin'])){
    header('Location: ../login.php');
}
else
{
    header('Location: ../redirect.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.ico">
    <title>AlAmal</title>
    <link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../../assets/css/dataTables.bootstrap4.min.css">
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
				<a href="index-2.html" class="logo">
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>Nom Complet</th>
										<th>Etat de demande</th>
										<th>Objet</th>
										<th>Date Debut</th>
										<th>Duree</th>
										<th>Note</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
								<?php
        							include('../../controller/Medecin_Chef.php');

									$m = new Medecin_Chef(null,null,null,null,null,null,null,null,null);
									$pat = $m->ListerDemandeConge();

									foreach($pat as $p){

										echo "
										<tr>
											<td>
												<a href='#' class='avatar'>".substr($p[0],0,1)."</a>
												<h2><a href='#'>$p[0] <span>$p[1]</span></a></h2>
											</td>
											<td>$p[3]</td>
											<td>$p[2]</td>
											<td>$p[4]</td>
											<td>$p[5]</td>
											<td>$p[6]</td>
											<td class='text-right'>
												<div class='col-sm dropdown dropdown-action'>
													<a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
													<div class='dropdown-menu dropdown-menu-right'>
														<a class='dropdown-item' href='update-conge.php?valide=oui&id=$p[7]'><i class='fa fa-check m-r-5'></i>Valider Conge</a>
														<a class='dropdown-item' href='update-conge.php?valide=non&id=$p[7]'><i class='fa fa-ban m-r-5'></i>Refuser Conge</a>
													</div>
												</div>
											</td>
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
		<div id="delete_patient" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="../../assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Patient?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
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
    <script src="../../assets/js/jquery.dataTables.min.js"></script>
    <script src="../../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../assets/js/moment.min.js"></script>
    <script src="../../assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="../../assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>