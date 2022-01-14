<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->

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
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="nav-link user-link" data-toggle="dropdown">
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
					<div class="col-sm-2 col-3">
						<h4 class="page-title">Patients</h4>
					</div>
					<div class="col-sm-10 ">

						<div class="container">
							<div class="row height d-flex justify-content-center align-items-center">
								<div class="col-md-8">
									<div class="search">
										<!-- <i class="fa fa-search"></i>  -->
										<input type="text" class="form-control" placeholder="the CIN please...." onkeyup="showHint(this.value)">
										<button class="btn btn-primary">Search</button>
										<a id="hintlink"><span id="txtSug"></span></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="col-sm-19 text-right m-b-20">
						<a href="add-patient.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Patient</a>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table datatable mb-0">
								<thead>
									<tr>
										<th>CIN</th>
										<th>Nom Complet</th>
										<th>Sexe</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									include('../../controller/Infirmier.php');

									$m = new Infirmier('hudhs', null, null, null, null, null, null, null, null);
									$pat = $m->ListerPatients();

									foreach ($pat as $p) {
										echo "
										<tr>
											<td><a href='#' class='avatar'>" . substr($p[0], 0, 1) . "</a>$p[0]</td>
											<td>$p[1]</td>
											<td>$p[4]</td>
											<td>$p[3]</td>
											<td>$p[5]</td>
											<td>$p[6]</td>
											<td class='text-right'>
											<div class='row'>
												<div class='col-sm-8 '>
														<a href='add-rdv.php?cin=$p[0]' class='btn-sm btn-primary'><i class='fa fa-plus m-r-5'></i>RDV</a>
												</div>
												<div class='col-sm dropdown dropdown-action'>
													<a href='#' class='action-icon dropdown-toggle' data-toggle='dropdown' aria-expanded='false'><i class='fa fa-ellipsis-v'></i></a>
													<div class='dropdown-menu dropdown-menu-right'>
														<a class='dropdown-item' href='rdvs.php?cin=$p[0]'><i class='fa fa-eye m-r-5'></i>Afficher les RDV</a>
													</div>
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
	<script>
		function showHint(str) {
			if (str.length == 0) {
				document.getElementById("txtSug").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtSug").innerHTML = this.responseText;
						document.getElementById("hintlink").setAttribute('href', '#' + this.responseText.split(',')[0]);
					}
				};
				xmlhttp.open("GET", "ajax-search.php?q=" + str, true);
				xmlhttp.send();
			}
		}
	</script>
</body>


<!-- patients23:19-->

</html>