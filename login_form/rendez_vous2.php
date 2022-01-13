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


    </head>

    <body>

    <?php

    //print("Bonjour $obj, $dat, $heur");

    $connexion=mysqli_connect("localhost","root","");
    mysqli_select_db($connexion, "centresante");

    if(!$connexion){echo "Désolé"; exit;}

    session_start();
    $cinl = $_SESSION['test'];

    //echo $cinl;
/*
    if(isset($_POST['submit'])){
        
        if(!empty($_POST['objet']) && !empty($_POST['datee']) && !empty($_POST['heure'])){

            $obj = $_POST['objet'];
            $dat = $_POST['datee'];
            $heur = $_POST['heure'];

            session_start();
            $_SESSION['alt'] = $obj;
            $_SESSION['dat'] = $dat;
            $_SESSION['heur'] = $heur;

            $requete = "INSERT INTO rdv (Date_RDV, Heure_RDV, Objet, Cin_patient) VALUES('$dat', '$heur', '$obj', '$cinl')";

            $resultat = mysqli_query($connexion,$requete);
            if($resultat){
                
                header('Location: /Medilab/login_form/print.php');
                exit();}
            else{
                echo "Erreur";
            }
        }else{
            echo "all fields required";
        }

    }
*/    
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

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="card border-0 shadow rounded overflow-hidden">
                            <ul class="nav nav-pills nav-justified flex-column flex-sm-row rounded-0 shadow overflow-hidden bg-light mb-0" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link rounded-0 active" id="clinic-booking" data-bs-toggle="pill" aria-selected="false">
                                        <div class="text-center pt-1 pb-1">
                                            <h4 class="title fw-normal mb-0">Clinic Appointment</h4>
                                        </div>
                                    </a><!--end nav link-->
                                </li><!--end nav item-->
                            </ul>

                                <form action="" method="POST">  
                                    <div class="tab-content p-4" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-clinic" role="tabpanel" aria-labelledby="clinic-booking">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label" >Objet<span class="text-danger">*</span></label>
                                                    <select name="objet" class="form-control department-name select2input " data-select2-id="select2-data-1-tn7h" tabindex="-1" aria-hidden="false">
                                                        <option value="Consultation" data-select2-id="select2-data-3-qoop">Consultation</option>
                                                        <option value="Controle">Controle</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
                                            <br>
            
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Date <span class="text-danger">*</span></label>
                                                    
                                                        <input type="date" name="datee" id="" class="form-control">

                                                        <?php 
                                                                //$dates = $_POST["datee"];
                                                        ?> 

                                                        <!--input type="text" name="new_date" id="" value=" <?php //echo "$dates"; ?>"-->
                                                        
                                                    <input type="submit" name="submit" class="btn btn-primary" value="Validé">
                                               
                                                        
                                                        <?php
                                                            if(isset($_POST['submit'])){

                                                                    $dates = $_POST["datee"];
                                                                    $_SESSION['dat'] = $dates;

                                                                //session_start();
                                                                //$cin = $_SESSION['test'];
                                                                //echo "$cin";

                                                                
                                                                                                    
                                                                $sql=mysqli_query($connexion,"SELECT `Heure_Calendrier_RDV`FROM `calendrier_rdv` WHERE id_rdv is null and Date_calendrier_RDV = '$dates'");
                                                                while($row = mysqli_fetch_array($sql)){
                                                            
                                                        ?>

                                                                <!--button><?php //echo $row['Heure_Calendrier_RDV'] ?></button-->
                                                               
                                                                   <input type="button" name="rdv_heure" value="<?php echo $row['Heure_Calendrier_RDV'] ?>">
                                                               <?php 
                                                                                
                                                                                //$heure = $_POST["rdv_heure"];
                                                                    
                                                                                //session_start();
                                                                                //$_SESSION['tert'] = $heur;
                                                               ?>                                                            
                                                            
                                                            
                                                        <tr>

                                                        <?php }} ?>


                                                        
                                                        
                                                    </table>

                                                        <br><input type="submit" name="submi" class="btn btn-primary" value="Validé">   
                                                    </form>                                                
                                                </div> 
                                            </div><!--end col-->
                                            <!--div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Heure <span class="text-danger">*</span></label>
                                                     <input type="time" name="heure" id="" class="form-control">
                                                     

                                                    <table>
                                                        <tr>
                                                            


                                                </div> 
                                            </div><!--end col-->
            
                                            <div class="col-lg-12">
                                                <div class="d-grid">
                                                    
                                                </div>
                                                
                                            </div><!--end col-->
                                        </div><!--end row-->

                                    </div>
                                
                                </form>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start -->
        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-4 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a href="https://shreethemes.in/doctris/layouts/landing/booking-appointment.html#" class="logo-footer">
                            <img src="./Doctris - Doctor Appointment Booking System_files/logo-light.png" height="22" alt="">
                        </a>
                        <p class="mt-4 me-xl-5">Great doctor if you need your family member to get effective immediate assistance, emergency treatment or a simple consultation.</p>
                    </div><!--end col-->

                    <div class="col-xl-7 col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="text-light title-dark footer-head">Company</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/aboutus.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> About us</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Services</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/doctor-team-two.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Team</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/blog-detail.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Project</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/blogs.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Blog</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/login.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Login</a></li>
                                </ul>
                            </div><!--end col-->
                            
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="text-light title-dark footer-head">Departments</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Eye Care</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Psychotherapy</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Dental Care</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Orthopedic</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Cardiology</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Gynecology</a></li>
                                    <li><a href="https://shreethemes.in/doctris/layouts/landing/departments.html" class="text-foot"><i class="mdi mdi-chevron-right me-1"></i> Neurology</a></li>
                                </ul>
                            </div><!--end col-->
                            
                            <div class="col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <h5 class="text-light title-dark footer-head">Contact us</h5>
                                <ul class="list-unstyled footer-list mt-4">
                                    <li class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail fea icon-sm text-foot align-middle"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <a href="mailto:contact@example.com" class="text-foot ms-2">contact@example.com</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone fea icon-sm text-foot align-middle"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        <a href="tel:+152534-468-854" class="text-foot ms-2">+152 534-468-854</a>
                                    </li>

                                    <li class="d-flex align-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin fea icon-sm text-foot align-middle"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                                        <a href="javascript:void(0)" class="video-play-icon text-foot ms-2">View on Google map</a>
                                    </li>
                                </ul>

                                <ul class="list-unstyled social-icon footer-social mb-0 mt-4">
                                    <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/booking-appointment.html#" class="rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook fea icon-sm fea-social"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a></li>
                                    <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/booking-appointment.html#" class="rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram fea icon-sm fea-social"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a></li>
                                    <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/booking-appointment.html#" class="rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter fea icon-sm fea-social"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a></li>
                                    <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/booking-appointment.html#" class="rounded-pill"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin fea icon-sm fea-social"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></a></li>
                                </ul><!--end icon-->
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-5">
                <div class="pt-4 footer-bar">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="text-sm-start text-center">
                                <p class="mb-0"><script>document.write(new Date().getFullYear())</script>2021 © Doctris. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                            </div>
                        </div><!--end col-->
    
                        <div class="col-sm-6 mt-4 mt-sm-0">
                            <ul class="list-unstyled footer-list text-sm-end text-center mb-0">
                                <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/terms.html" class="text-foot me-2">Terms</a></li>
                                <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/privacy.html" class="text-foot me-2">Privacy</a></li>
                                <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/aboutus.html" class="text-foot me-2">About</a></li>
                                <li class="list-inline-item"><a href="https://shreethemes.in/doctris/layouts/landing/contact.html" class="text-foot me-2">Contact</a></li>
                            </ul>
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- End -->

        <!-- Back to top -->
        <a href="https://shreethemes.in/doctris/layouts/landing/booking-appointment.html#" onclick="topFunction()" id="back-to-top" class="btn btn-icon btn-pills btn-primary back-to-top"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up icons"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></a>
        <!-- Back to top -->

        <!-- Offcanvas Start -->
        <div class="offcanvas bg-white offcanvas-top" tabindex="-1" id="offcanvasTop">
            <div class="offcanvas-body d-flex align-items-center align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="text-center">
                                <h4>Search now.....</h4>
                                <div class="subcribe-form mt-4">
                                    <form>
                                        <div class="mb-0">
                                            <input type="text" id="help" name="name" class="border bg-white rounded-pill" required="" placeholder="Search">
                                            <button type="submit" class="btn btn-pills btn-primary">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!--end container-->
            </div>
        </div>
        <!-- Offcanvas End -->

        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header p-4 border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="./Doctris - Doctor Appointment Booking System_files/logo-dark.png" height="24" class="light-version" alt="">
                    <img src="./Doctris - Doctor Appointment Booking System_files/logo-light.png" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="uil uil-times fs-4"></i></button>
            </div>
            <!--div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <-- Style switcher >
                        <div id="style-switcher">
                            <div>
                                <ul class="text-center list-unstyled mb-0">
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme(&#39;style-rtl&#39;)"><img src="./Doctris - Doctor Appointment Booking System_files/landing-light-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme(&#39;style&#39;)"><img src="./Doctris - Doctor Appointment Booking System_files/landing-light.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme(&#39;style-dark-rtl&#39;)"><img src="./Doctris - Doctor Appointment Booking System_files/landing-dark-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme(&#39;style-dark&#39;)"><img src="./Doctris - Doctor Appointment Booking System_files/landing-dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme(&#39;style-dark&#39;)"><img src="./Doctris - Doctor Appointment Booking System_files/landing-dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme(&#39;style&#39;)"><img src="./Doctris - Doctor Appointment Booking System_files/landing-light.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="https://shreethemes.in/doctris/layouts/admin/index.html" target="_blank" class="mt-4"><img src="./Doctris - Doctor Appointment Booking System_files/light-dash.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Admin Dashboard</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <-- end Style switcher ->
                    </div><--end col->
                </div><--end row->
            </div-->

            <div class="offcanvas-footer p-4 border-top text-center">
                <ul class="list-unstyled social-icon mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/doctris" target="_blank" class="rounded"><i class="uil uil-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-facebook-f align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="uil uil-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="uil uil-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="uil uil-envelope align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in/" target="_blank" class="rounded"><i class="uil uil-globe align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->
        
        <!-- javascript -->
        <script src="./Doctris - Doctor Appointment Booking System_files/jquery.min.js.télécharger"></script>
        <script src="./Doctris - Doctor Appointment Booking System_files/bootstrap.bundle.min.js.télécharger"></script>
        <!-- Select2 -->
        <script src="./Doctris - Doctor Appointment Booking System_files/select2.min.js.télécharger"></script>
        <script src="./Doctris - Doctor Appointment Booking System_files/select2.init.js.télécharger"></script>
        <!-- Datepicker -->
        <script src="./Doctris - Doctor Appointment Booking System_files/flatpickr.min.js.télécharger"></script>
        <script src="./Doctris - Doctor Appointment Booking System_files/flatpickr.init.js.télécharger"></script><div class="flatpickr-calendar animate showTimeInput" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months" tabindex="-1"><option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January</option><option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February</option><option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March</option><option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April</option><option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May</option><option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June</option><option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July</option><option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August</option><option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September</option><option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October</option><option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November</option><option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December</option></select><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="November 28, 2021" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="November 29, 2021" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="November 30, 2021" tabindex="-1">30</span><span class="flatpickr-day " aria-label="December 1, 2021" tabindex="-1">1</span><span class="flatpickr-day " aria-label="December 2, 2021" tabindex="-1">2</span><span class="flatpickr-day " aria-label="December 3, 2021" tabindex="-1">3</span><span class="flatpickr-day " aria-label="December 4, 2021" tabindex="-1">4</span><span class="flatpickr-day " aria-label="December 5, 2021" tabindex="-1">5</span><span class="flatpickr-day " aria-label="December 6, 2021" tabindex="-1">6</span><span class="flatpickr-day " aria-label="December 7, 2021" tabindex="-1">7</span><span class="flatpickr-day " aria-label="December 8, 2021" tabindex="-1">8</span><span class="flatpickr-day " aria-label="December 9, 2021" tabindex="-1">9</span><span class="flatpickr-day " aria-label="December 10, 2021" tabindex="-1">10</span><span class="flatpickr-day " aria-label="December 11, 2021" tabindex="-1">11</span><span class="flatpickr-day " aria-label="December 12, 2021" tabindex="-1">12</span><span class="flatpickr-day " aria-label="December 13, 2021" tabindex="-1">13</span><span class="flatpickr-day " aria-label="December 14, 2021" tabindex="-1">14</span><span class="flatpickr-day " aria-label="December 15, 2021" tabindex="-1">15</span><span class="flatpickr-day " aria-label="December 16, 2021" tabindex="-1">16</span><span class="flatpickr-day " aria-label="December 17, 2021" tabindex="-1">17</span><span class="flatpickr-day " aria-label="December 18, 2021" tabindex="-1">18</span><span class="flatpickr-day " aria-label="December 19, 2021" tabindex="-1">19</span><span class="flatpickr-day " aria-label="December 20, 2021" tabindex="-1">20</span><span class="flatpickr-day " aria-label="December 21, 2021" tabindex="-1">21</span><span class="flatpickr-day " aria-label="December 22, 2021" tabindex="-1">22</span><span class="flatpickr-day " aria-label="December 23, 2021" tabindex="-1">23</span><span class="flatpickr-day " aria-label="December 24, 2021" tabindex="-1">24</span><span class="flatpickr-day " aria-label="December 25, 2021" tabindex="-1">25</span><span class="flatpickr-day " aria-label="December 26, 2021" tabindex="-1">26</span><span class="flatpickr-day " aria-label="December 27, 2021" tabindex="-1">27</span><span class="flatpickr-day " aria-label="December 28, 2021" tabindex="-1">28</span><span class="flatpickr-day " aria-label="December 29, 2021" tabindex="-1">29</span><span class="flatpickr-day " aria-label="December 30, 2021" tabindex="-1">30</span><span class="flatpickr-day today selected" aria-label="December 31, 2021" aria-current="date" tabindex="-1">31</span><span class="flatpickr-day nextMonthDay" aria-label="January 1, 2022" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="January 2, 2022" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="January 3, 2022" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="January 4, 2022" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="January 5, 2022" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="January 6, 2022" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="January 7, 2022" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="January 8, 2022" tabindex="-1">8</span></div></div></div></div></div>
        <!-- Datepicker -->
        <script src="./Doctris - Doctor Appointment Booking System_files/jquery.timepicker.min.js.télécharger"></script> 
        <script src="./Doctris - Doctor Appointment Booking System_files/timepicker.init.js.télécharger"></script><div class="ui-timepicker-container ui-timepicker-hidden ui-helper-hidden" style="display: none;"><div class="ui-timepicker ui-widget ui-widget-content ui-menu ui-corner-all"><ul class="ui-timepicker-viewport"></ul></div></div>
        <!-- Icons -->
        <script src="./Doctris - Doctor Appointment Booking System_files/feather.min.js.télécharger"></script>
        <!-- Main Js -->
        <script src="./Doctris - Doctor Appointment Booking System_files/app.js.télécharger"></script>
        
    

</body></html>