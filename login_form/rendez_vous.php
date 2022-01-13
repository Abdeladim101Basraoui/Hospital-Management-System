<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="/login_form/css/bootstrap.min.css">


        <!-- Fonts -->


    <link rel="stylesheet" href="./css/logup.css">
    <link rel="icon" href="Favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/rendv/rendez1.css">
    <link rel="stylesheet" href="css/rendv/rendez2.css">
    <link rel="stylesheet" href="css/rendv/rendez3.css">
    <link rel="stylesheet" href="css/rendv/rendez5.css">
    <link rel="stylesheet" href="css/rendv/rendez6.css">
    <link rel="stylesheet" href="css/rendv/rendez7.css">
    <link rel="stylesheet" href="css/rendv/rendez8.css">
    <link rel="stylesheet" href="css/rendv/rendez9.css">
    <link rel="stylesheet" href="css/rendv/rendez9.scss">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../firstpage/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../firstpage/css/style.css">
    <link rel="stylesheet" type="text/css" href="../firstpage/css/stylel.css">
    <link rel="stylesheet" type="text/css" href="../firstpage/css/responsive.css">

    <!-- ChatBot -->
    <link rel="stylesheet" type="text/css" href="../firstpage/css/jquery.convform.css">
    <script type="text/javascript" src="../firstpage/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="../firstpage/js/jquery.convform.js"></script>
    <script type="text/javascript" src="../firstpage/js/custom.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
    <a class="navbar-brand" href="#">AL AMAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login.php">Logout</a>
                </li>
                
            </ul>

        </div>
        </div>
    </nav>

    </nav>
    <body>
    <!-- ChatBot -->

    <div class="chat_icon">
        <!--i class="fa fa-comments" aria-hidden="true"></i-->
        <img src="../firstpage/images/chatboot.gif" alt="" width="200" height="160">
    </div>

    <div class="chat_box">
        <div class="my-conv-form-wrapper">
            <form action="" method="GET" class="hidden">

                <select data-conv-question="Bonjour! Comment puis-je vous aider ?" name="category">
                    <option value="Prendre un rendez-vous">Prendre rendez-vous ?</option>
                    <option value="Gérer mes rendez-vous">Gérer rendez-vous ?</option>
                </select>

                <div data-conv-fork="category">
                    <div data-conv-case="WebDevelopment">
                        <input type="text" name="domainName" data-conv-question="Please, tell me your domain name">
                    </div>
                    <div data-conv-case="DigitalMarketing" data-conv-fork="first-question2">
                        <input type="text" name="companyName" data-conv-question="Please, enter your company name">
                    </div>
                </div>

                <input type="text" name="name" data-conv-question="Please, Enter your name">

                <input type="text" data-conv-question="Hi {name}, <br> It's a pleasure to meet you." data-no-answer="true">

                <input data-conv-question="Premierement, Acceder a Prendre un rendez-vous pour continuer tapez oui!" type="text" name="first" required placeholder="What's your e-mail?">

                <input data-conv-question="Deuxiemement, Remplissez le formulaire de reservation pour continuer tapez oui!"  type="text" name="second" required placeholder="What's your e-mail?">

                <input data-conv-question="Troisièmement, Imprimer votre fiche de rendez-vous pour continuer tapez oui!" type="text" name="Third" required placeholder="What's your e-mail?">

                <!--input data-conv-question="Troisiemement, Acceder au Prendre un rendez-vous pour continuer tapez oui!" data-pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" type="email" name="email" required placeholder="What's your e-mail?"-->

                <select data-conv-question="Please Conform">
        <option value="Yes">Conform</option>
      </select>

            </form>
        </div>
    </div>
    <!-- ChatBot end -->




        <!-- Start Hero -->
        <section class="bg-half-260 d-table w-100 alo" style="background: url(&#39;images/01.jpg&#39;) center;">
            <div class="bg-overlay bg-overlay-dark"></div>
            <div class="container">
                <div class="row mt-5 mt-lg-0">
                    <div class="col-12">
                        <div class="heading-title">
                            <img src="./Doctris - Doctor Appointment Booking System_files/logo-icon.png" height="50" alt="">
                            <h4 class="display-4 fw-bold text-white title-dark mt-3 mb-4">Rencontrez le<br> Meilleur docteur</h4>
                            <p class="para-desc text-white-50 mb-0">Excellent médecin si vous avez besoin d'un membre de votre famille pour obtenir une assistance immédiate efficace, un traitement d'urgence ou une simple consultation.</p>
                            
                            <div class="mt-4 pt-2">
                                <form action="rendez_vous2.php" method="post">
                                <button class="btn btn-primary">Prendre un rendez-vous</button>
                            </form>
                            </div>
                            <div class="mt-4 pt-2">
                            <form action="Gere_rdv.php" method="post">
                                <button class="btn btn-primary">Gérer mes rendez-vous</button>
                            </form>

                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Hero -->
        

	    <!-- /hero_single -->
		<div class="bg_gray">
			<div class="container margin_60_40 how">
				<div class="main_title center">
					<span><em></em></span>
					<h2>Prenez un rendez-vous en quelques clics.</h2>
					<!-- <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p> -->
				</div>
				<div class="row justify-content-center align-items-center add_bottom_45">
					<div class="col-lg-5">
						<div class="box_about">
							<strong>1</strong>
							<h3>Acceder a Prender un render-vous</h3>
							<!--p>Recherchez votre medecin par specialite, son nom, son centre de sante ou notre Aide aux soins.</p-->
                            <p>Premierement, Acceder a l'interface pour remplire le formulaire de prise render-vous !</p>
							<img src="./Prise de rendez-vous médical _ MediReservation_files/arrow_about.png" data-src="https://medireservation.com/assets/front_section/img/arrow_about.png" alt="" class="arrow_1 lazy loaded" data-was-processed="true">
						</div>
					</div>
					<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
						<figure><img src="images/about_1.svg" data-src="https://medireservation.com/assets/front_section/img/about_1.svg" alt="" class="img-fluid lazy loaded" width="180" height="180" data-was-processed="true"></figure>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center add_bottom_45">
					<div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
						<figure><img src="images/about_2.svg" data-src="https://medireservation.com/assets/front_section/img/about_2.svg" alt="" class="img-fluid lazy loaded" width="180" height="180" data-was-processed="true"></figure>
					</div>
					<div class="col-lg-5">
						<div class="box_about">
							<strong>2</strong>
							<h3>Confirmez la date et nature du rendez-vous</h3>
							<p>Sélectionnez la date et heure qui vous convient et la nature de votre rendez-vous.</p>
							<img src="./Prise de rendez-vous médical _ MediReservation_files/arrow_about.png" data-src="https://medireservation.com/assets/front_section/img/arrow_about.png" alt="" class="arrow_2 lazy loaded" data-was-processed="true">
						</div>
					</div>
				</div>
				<!-- /row -->
				<div class="row justify-content-center align-items-center add_bottom_25">
					<div class="col-lg-5">
						<div class="box_about">
							<strong>3</strong>
							<h3>Recevez la confirmation de votre rendez-vous</h3>
							<p>valider les coordonnées de vos rendez-vous puis imprimer votre confirmation.</p>
						</div>
					</div>
					<div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
					<figure><img src="images/about_3.svg" data-src="https://medireservation.com/assets/front_section/img/about_3.svg" alt="" class="img-fluid lazy loaded" width="180" height="180" data-was-processed="true"></figure>
					</div>
				</div>

</body>
</html>