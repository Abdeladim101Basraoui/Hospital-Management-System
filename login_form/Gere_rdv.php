<!DOCTYPE html>
<!-- saved from url=(0071)https://shreethemes.in/doctris/layouts/landing/booking-appointment.html -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title>AL AMAL - Appointment Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template">
        <meta name="keywords" content="Appointment, Booking, System, Dashboard, Health">
        <meta name="author" content="Shreethemes">
        <meta name="email" content="support@shreethemes.in">
        <meta name="website" content="https://shreethemes.in">
        <meta name="Version" content="v1.2.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="https://shreethemes.in/doctris/layouts/assets/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="./Doctris - Doctor Appointment Booking System_files/bootstrap.min.css" rel="stylesheet" type="text/css">
        <!-- Select2 -->
        <link href="./Doctris - Doctor Appointment Booking System_files/select2.min.css" rel="stylesheet">
        <!-- Date picker -->
        <link rel="stylesheet" href="./Doctris - Doctor Appointment Booking System_files/flatpickr.min.css">
        <link href="./Doctris - Doctor Appointment Booking System_files/jquery.timepicker.min.css" rel="stylesheet" type="text/css">
        <!-- Icons -->
        <link href="./Doctris - Doctor Appointment Booking System_files/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="./Doctris - Doctor Appointment Booking System_files/remixicon.css" rel="stylesheet" type="text/css">
        <link href="./Doctris - Doctor Appointment Booking System_files/line.css" rel="stylesheet">
        <!-- Css -->
        <link href="./Doctris - Doctor Appointment Booking System_files/style.min.css" rel="stylesheet" type="text/css" id="theme-opt">

        <link rel="stylesheet" href="css/rendv2/rendez1.css">
        <link rel="stylesheet" href="css/rendv2/rendez2.css">
        <link rel="stylesheet" href="css/rendv2/rendez3.css">
        <link rel="stylesheet" href="css/rendv2/rendez4.css">
        <link rel="stylesheet" href="css/rendv2/rendez5.css">
        <link rel="stylesheet" href="css/rendv2/rendez6.css">
        <link rel="stylesheet" href="css/rendv2/rendez7.css">

        <script src="js/sweetalert.min.js"></script>



    </head>

    <body>

    <?php

    //print("Bonjour $obj, $dat, $heur");

    $connexion=mysqli_connect("localhost","root","");
    mysqli_select_db($connexion, "centresante");

    if(!$connexion){echo "Désolé"; exit;}

    session_start();
    $cinl = $_SESSION['test'];


?>    



<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">AL AMAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="rendez_vous.php">Retour</a>
                </li>
                
            </ul>

        </div>
        </div>
    </nav>

        <!-- Start Hero -->
        <section class="bg-half-170 d-table w-100 bg-light">
            <div class="container">
                <div class="row mt-5 justify-content-center">
                    <div class="col-12">
                        <div class="section-title text-center">
                            <h3 class="sub-title mb-4">Book an appointment</h3>
                            <p class="para-desc mx-auto text-muted">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                        
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->

        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                    <center><h4 class="page-title">Appointments</h4></center><br>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-10">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>

									<tr>


										<th></th>
										<th></th>
										<th>Date de Rendez-vous</th>
										<th>Heure de Rendez-vous</th>
										<th>Nature de Rendez-vous</th>
										<th>Cin</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
                                <tbody>
                                <?php
                                            //if(isset($_POST['submit'])){
                                            
                                            $connexion=mysqli_connect("localhost","root","");
                                            mysqli_select_db($connexion, "centresante");
                                        
                                            if(!$connexion){echo "Désolé"; exit;}
                                            //session_start();
                                            //$cin = $_SESSION['test'];
                                            //echo "$cin";

                           
                                                                                
                                            $sql=mysqli_query($connexion,"select * from rdv where Cin_patient = '$cinl'");
                                            while($row = mysqli_fetch_array($sql)){
                                        
                                            
                                    ?>
									<tr>
                                        

										<td></td>
                                        <td><?php //echo $row['Id_rdv'] ?></td>
										<td><?php echo $row['Date_RDV'] ?></td>
										<td><?php echo $row['Heure_RDV'] ?></td>
										<td><?php echo $row['Objet'] ?></td>
                                        <td><?php echo $row['Cin_patient'] ?></td>
                                        
                                        <td>
                                            <a href="delete_rdv.php?delete=<?php echo $row['Id_rdv']; ?>" onclick="sweetAlert('Good job!', 'You clicked the button!', 'success');" data-toggle="modal" class="fa fa-fw fa-plus">Delete</a>
                                            
                                        </td>
                                        <script>
                                            function alo(){
                                                //alert("Deleted Succ");
                                                Swal.fire(
                                                'Good job!',
                                                'You clicked the button!',
                                                'success'
                                                )
                                            }
                                        </script>

										
                                        
										
										<td><!--a href='delete_rdv.php?rn=$row[Id_rdv]'--></td>
                                        <td class="text-right">
											<div class="dropdown dropdown-action">
												<a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
												<div class="dropdown-menu dropdown-menu-right">
													<a class="dropdown-item" href="edit-appointment.html"><i class="fa fa-pencil m-r-5"></i> Edit</a>
													<a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
												</div>
											</div>
										</td>
									</tr>

                                    <?php } ?>


								</tbody>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


</body></html>