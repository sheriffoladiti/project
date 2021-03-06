<?php 

    include('connection.php') ;
    require_once "./includes/functions.php";
?>
<!DOCTYPE html>
<!--
	Resto by GetTemplates.co
	URL: https://gettemplates.co
-->
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
	<div class="sidenav-content"> -->
		<form action=""> -->

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
	
 	
</div>	<div id="canvas-overlay"></div>
	<div class="boxed-page">
		<nav id="navbar-header" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
            <img src="img/foods/logo.png" alt="">
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
                <img src="img/foods/logo.png" alt="">
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
                </li>
            </ul>
        </div>
    </div>
</nav>		<!-- Special Dishes Section -->
<section id="gtco-special-dishes" class="bg-grey section-padding">
    <div class="container">
        <div class="section-content">
            <div class="heading-section text-center">

                <h2> Our Menu</h2>
            </div>

                        <?php fetch_menu() ?>

            <!-- 
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">04.</h2>
            <div class="dishes-text">
            <h3><span>Meat plate</span><br>Meat assorti</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??20.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/meatplate.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                    
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">05.</h2>
            <div class="dishes-text">
            <h3><span>Pizza</span><br>Pizza with jamon and figs</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??15.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/pizza1.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                        
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">06.</h2>
            <div class="dishes-text">
            <h3><span>Pasta</span><br>??oconut and asparagus sauce</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??25.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/pasta.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                            
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">07.</h2>
            <div class="dishes-text">
            <h3><span>Salad</span><br>??ornichon and peaches</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??16.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/sal.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                                
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">08.</h2>
            <div class="dishes-text">
            <h3><span>Pancakes</span><br>Sweet pancakes with honey dressing</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??12.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/pancakes1.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                                    
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">09.</h2>
            <div class="dishes-text">
            <h3><span>Mac and cheese</span><br>Macaroni with cheese and walnuts</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??22.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/mac.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                                        
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">10.</h2>
            <div class="dishes-text">
            <h3><span>Noodle</span><br>Noodle with vegetables and soy sauce</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??14.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/noodle.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div>
                                                            
            <div class="row mt-5">
            <div class="col-lg-5 col-md-6 align-self-center py-5">
            <h2 class="special-number">11.</h2>
            <div class="dishes-text">
            <h3><span>Fruits</span><br>Seasonal fruits</h3>
            <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
            <h3 class="special-dishes-price">??10.00</h3>
            <a href="foodorder.php" class="btn-primary mt-3">Order</a>
            </div>
            </div>
            <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
            <img src="img/foods/fruits1.png" alt="" class="img-fluid shadow w-100">
            </div>
            </div> -->
    </div>
</div>
</section>
<!-- End of Special Dishes Section -->		
<footer class="mastfoot pb-5 bg-white section-padding pb-0">
    <div class="inner container">
         <div class="row">
         	<div class="col-lg-6">
         		<div class="footer-widget pr-lg-5 pr-0">
         			<img src="img/foods/logo.png" class="img-fluid footer-logo mb-3" alt="">
	         		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et obcaecati quisquam id sit omnis explicabo voluptate aut placeat, soluta, nisi ea magni facere, itaque incidunt modi? Magni, et voluptatum dolorem.</p>
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
</footer>	</div>
	
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
