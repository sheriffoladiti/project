<?php include('connection.php') ?>
<!DOCTYPE html>

<html lang="en">

<head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Resto - Restaurant Bootstrap 4 Template by GetTemplates.co</title>
        <meta name="description" content="Resto">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- External CSS -->
        <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
        <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.min.css">

        <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>

</head>
<body data-spy="scroll" data-target="#navbar">
	<div id="side-nav" class="sidenav">
	<a href="javascript:void(0)" id="side-nav-close">&times;</a>
	
</div>	

<div id="side-search" class="sidenav">
	<a href="javascript:void(0)" id="side-search-close">&times;</a>
	<div class="sidenav-content">
		<form action="">

			<div class="input-group md-form form-sm form-2 pl-0">
			  <input class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
			  <div class="input-group-append">
			    <button class="input-group-text red lighten-3" id="basic-text1">
			    	<i class="fas fa-search text-grey" aria-hidden="true"></i>
			    </button>
			  </div>
			</div>

		</form>
	</div>
	
 	
</div>	

<div id="canvas-overlay"></div>
	<div class="boxed-page">
	
            <nav id="navbar-header" class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
                        <img src="img/logo.png" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="lnr lnr-menu"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                        <ul class="navbar-nav d-flex justify-content-between">
                            <li class="nav-item only-desktop">
                                
                            </li>
                            <div class="d-flex flex-lg-row flex-column">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.php">Who we are</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="menu.php">Menu</a>
                                </li>
                                
                            </div>
                        </ul>
                        
                        <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                            <img src="img/logo.png" alt="">
                        </a>
                        <ul class="navbar-nav d-flex justify-content-between">
                            <div class="d-flex flex-lg-row flex-column">
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="team.php">Team</a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="<?php echo isset($_SESSION['username']) ? 'dashboard.php' : 'SignIn.php' ?>"><?php echo isset($_SESSION['username']) ? 'Account' : 'Sign In' ?></a>
                                </li>
                                <?php if (!isset($_SESSION['username'])) : ?>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link" href="SignUp.php">Sign Up</a>
                                    </li>
                                <?php endif; ?>
                                <li class="nav-item dropdown">
                                    
                                    <a class="nav-link" href="contactus.php">Contact Us</a>
                                </li>

                            </div>
                            <li class="nav-item">
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>			<!-- Reservation Section -->
<section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay" style="background-image: url(img/reservation-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-content bg-white p-5 shadow">
                    <div class="heading-section text-center">

                                 <!-- <span class="subheading">
                                        Make order
                                    </span> -->
                                    <h2>Sign up</h2>
                                </div>
                                
                                <?php 

  //!!!!!!!!!!! при регистрации пользователь нажав на страницу регистрации саму форму не увидит//
                                if (!isset($_SESSION['username'])) : ?>

                                <form method="post" action="signup.php">
                                <?php include('errors.php'); ?>
                                <div class="input-group">
                   
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="full_name" name="fullname" placeholder="Full Name">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="username" name="username" placeholder="Username"> 
                            </div>
                            <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password_1" placeholder="Password">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="password" class="form-control" id="password" name="password_2" placeholder="Confirm Password">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="number" class="form-control" id="phonenumber" name="phonenumber" placeholder="Phone Number">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="Postcode" name="postcode" placeholder="Postcode"> </div>
                                <div>
                                <legend>gender:</legend> <label for="male">Male</label> <input type="radio" name="gender" id="male" value="male">
                                <legend<label for="female">Female</label> <input type="radio" name="gender" id="female" value="female">
                            </div>
                        
                                <button class="btn btn-primary btn-shadow btn-lg"type="submit" name="reg_user">Sign up</button> 

					<p>By continuing, you agree to our <a href ="#">Terms & Conditions and Privacy Policy. </a>  </P> 
					<p>Your information is important to us, we will not use it for commercial purpose or sell this information to a third-party  </P>
  	</div>

      </div>


  	</p>
  </form>
  
  <?php endif; ?>
                                
                            </div>
                        </div>
                    </div>              
                </div>
            </section>

    <footer class="mastfoot pb-5 bg-white section-padding pb-0">
                <div class="inner container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-widget pr-lg-5 pr-0">
                                <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
                                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p> -->
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="footer-widget px-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2166.0629592662335!2d-2.1355488842593884!3d57.11888738094067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48841030d202dc7b%3A0x57e0a73cdda87ad0!2sRGU%20Engineering!5e0!3m2!1sru!2suk!4v1646410956499!5m2!1sru!2suk" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <p style="font-size: 1.2em;">
                                <a href="tel:+441111111111"><strong>Tel:<i> +44 1111 111111</i></strong></a>
                            </p>    
                        </div>

                        <div class="col-md-12 d-flex align-items-center">
                            <p class="mx-auto text-center mb-0">TEAM Q. Design by <a href="https://gettemplates.co" target="_blank">GetTemplates</a></p>
                        </div>
                    </div>
                </div>
            </footer>	
        </div>
                
        <!-- External JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
        <script src="vendor/bootstrap/popper.min.js"></script>
        <script src="vendor/bootstrap/bootstrap.min.js"></script>
        <script src="vendor/select2/select2.min.js "></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
        <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

        <!-- Main JS -->
        <script src="js/app.min.js "></script>
    </body>
</html>
