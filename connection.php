<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$fullname = "";
$phonenumber = "";
$postcode = "";
$address = "";
$gender = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'team_project'); //!!!!!!!!!//

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
  $fullname = $_POST['fullname'];
  $phonenumber = $_POST['phonenumber'];
  $postcode = $_POST['postcode'];
  $address = $_POST['address'];
  $gender = $_POST['gender']; //!!!!!!!!!//
  

  
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    array_push($errors, "The two passwords do not match");
  }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "Home Address is required"); }
  if (empty($gender)) { array_push($errors, "You must specify your gender to continue"); }
	

   // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

 // Finally, register user if there are no errors in the form
 if (count($errors) == 0) {
  $password = ($password_1);//encrypt the password before saving in the database

  $query = "INSERT INTO users (fullname, username, email, password, phonenumber, postcode, address, gender) 
        VALUES('$fullname', '$username', '$email', '$password', '$phonenumber', '$postcode', '$address', '$gender')";
  $result = mysqli_query($db, $query);

  if ($result) {
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    //var_dump($_POST, $_SESSION, $result);
    //exit;
    header('location: dashboard.php'); 
  } else {
    header('location: SignUp.php');
  }
}
}



// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = ($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);

  	if (mysqli_num_rows($results) == 1) {
      $row = mysqli_fetch_assoc($result);
      
      $_SESSION["cur_uid"] = $row['uid'];
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] =  $username;
  	  header('location: dashboard.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}
?>
