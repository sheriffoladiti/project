<?php 
include('connection.php');

if (!isset($_SESSION['username'])) {
   	$_SESSION['msg'] = "You must log in first";
   	header('location: SignIn.php');
}
if (isset($_GET['logout'])) {
   	session_destroy();
   	unset($_SESSION['username']);
   	header("location: index.php");
}

$username = $_SESSION['username'];

$sql = "SELECT uid, fullname, username, password, email, phonenumber, address, postcode, gender FROM `users` WHERE username='$username'";
$result = mysqli_query( $db, $sql ); // get user from database 

$rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 

    list( 
        
        'uid'            => $user_id, 
        'fullname'       => $fullname, 
        'password'       => $password,
        'email'          => $email, 
        'phonenumber'    => $phone,
        'address'        => $address,
        'postcode'       => $postcode,
        'gender'         => $gender
    ) = array_shift( $rows );     
    $user_id = (int) $user_id;
//get orders


$sql = "SELECT * FROM `order` LEFT JOIN paymentmethod ON `order`.paymentmethodid = paymentmethod.paymentmethodid  LEFT JOIN paymentstatus ON `order`.paymentstatusid = paymentstatus.paymentstatusid WHERE uid='$user_id'";
$result = mysqli_query( $db, $sql ); // get user from database   

$rows = mysqli_fetch_all( $result, MYSQLI_ASSOC ); // get data 


//var_dump($rows);

?>


<!DOCTYPE html>
<!--
	Group Q by GetTemplates.co
	URL: https://gettemplates.co
-->
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Group Q - Restaurant Bootstrap 4 Template by GetTemplates.co</title>
        <meta name="description" content="Group Q">
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

    <body>
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
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- <div class="hero"> -->
                <div class="container">
                    <h2 class="display-4 mb-5"> 
                        <?php if (isset($_SESSION['username'])) : ?>
                            <strong>Welcome!<br style="color: red;"> <?php echo $_SESSION['username']; ?></br></strong>
                        <?php endif; ?>
                    </h2>

                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="user_information-tab" data-toggle="tab" href="#user_information" role="tab" aria-controls="user_information" aria-selected="true">User Information</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="order_history_tab" data-toggle="tab" href="#order_history" role="tab" aria-controls="order_history" aria-selected="true">Order History</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.php?logout=1" aria-selected="true">Log Out</a> <!-- !!!!!!!!! -->
                        </li>
                    </ul>

                    <div class="tab-content mt-5 mb-5">
                        <div class="tab-pane fade show active" id="user_information" role="tabpanel" aria-labelledby="user_information-tab">

                            <form>
                                <div class="row align-items-start">
                                    <div class="col">
                                
                                        <div class="mb-3">
                                            <label for="fullname" class="form-label">Full name</label>
                                            <input type="text" class="form-control" name="fullname" value="<?php echo $fullname ?>" id="fullname" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="username" class="form-label">User name</label>
                                            <input type="text" class="form-control" name="username" value="<?php echo $username ?>" id="username" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" value="<?php echo $password ?>" id="password" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email address</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $email ?>" id="email" readonly>
                                        </div>
                                    </div>

                                    <div class="col"> 

                                        <div class="mb-3">
                                            <label for="phonenumber" class="form-label">Phone</label>
                                            <input type="tel" class="form-control" name="phonenumber" value="<?php echo $phone ?>" id="phonenumber" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="address" class="form-label">Address</label>
                                            <input type="text" class="form-control" name="address" value="<?php echo $address ?>" id="address" readonly>
                                        </div>

                                        <div class="mb-3">
                                            <label for="postcode" class="form-label">Postcode</label>
                                            <input type="text" class="form-control" name="postcode" value="<?php echo $postcode ?>" id="postcode" readonly>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="male" <?php echo $gender = 'male' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="male">Male</label>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="gender" id="female" <?php echo $gender = 'female' ? 'checked' : '' ?>>
                                            <label class="form-check-label" for="female">Female</label>
                                        </div>

                                    </div>
                                </div>    
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

                            </form>
                        </div>
                        
                        <!--Tab2-->    
                        <div class="tab-pane fade" id="order_history" role="tabpanel" aria-labelledby="order_history-tab">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Food name</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Method</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    <?php foreach ($rows as $order) :
                                        list( 
                            
                                            'orderid'           => $order_id, 
                                            'foodname'          => $food_name, 
                                            'amount'            => $amount,
                                            'datepaid'          => $date,
                                            'paymenttype'       => $payment_type,
                                            'paymentstatus'     => $payment_status
                                        
                                            ) = $order;   ?>
                                        <tr>
                                            <td><?php echo $order_id ?></td>
                                            <td><?php echo $date ?></td>
                                            <td><?php echo $food_name ?></td>
                                            <td><?php echo $amount ?></td>
                                            <td><?php echo $payment_status ?></td>
                                            <td><?php echo $payment_type ?></td>
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>

                            </table>


                        </div>
                    </div>

                    <h3 class="mt-7">We recommend</h3>
                    <div class="row">
                        <div class="col-4">
                            <a href="#" class="thumb-menu">
                                <img class="img-fluid img-cover" src="img/fruits.png" />
                                <h6>Fruits</h6>
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="#" class="thumb-menu">
                                <img class="img-fluid img-cover" src="img/pizza.png" />
                                <h6>Pizza</h6>
                            </a>
                        </div>

                        <div class="col-4">
                            <a href="#" class="thumb-menu">
                                <img class="img-fluid img-cover" src="img/pancakes.png"/>
                                <h6>Pancakes</h6>
                            </a>
                        </div>
                    </div>
                     
                    
                    <!-- <div class="col-md-12 d-flex align-items-center"> -->
                        <!-- notification message -->
                        <?php // if (isset($_SESSION['success'])) : ?>
                           <!-- <div class="error success">
                                <h3>
                                    <?php 
                                        // echo $_SESSION['success']; 
                                        // unset($_SESSION['success']);
                                    ?>
                                </h3>
                            </div> -->
                        <?php // endif ?>
                     <!--</div> -->
            
                </div>
            <!-- </div> -->

            <!-- End of Reservation Section -->		
            <footer class="mastfoot pb-5 bg-white section-padding pb-0">
                <div class="inner container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="footer-widget pr-lg-5 pr-0">
                                <img src="img/logo.png" class="img-fluid footer-logo mb-3" alt="">
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

                        <!-- <div class="col-lg-4"></div> -->
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
