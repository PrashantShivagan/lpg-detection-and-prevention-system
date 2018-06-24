<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'lpg');

// REGISTER USER
if (isset($_POST['updateac'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $fname = mysqli_real_escape_string($db, $_POST['first name']);
  $lname = mysqli_real_escape_string($db, $_POST['last name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $pincode = mysqli_real_escape_string($db, $_POST['postalcode']);
  $mobileno = mysqli_real_escape_string($db, $_POST['mobile no']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($fname)) { array_push($errors, "First Name is required"); }
   if (empty($lname)) { array_push($errors, "Last Name is required"); }
    if (empty($address)) { array_push($errors, "Address is required"); }
     if (empty($city)) { array_push($errors, "City is required"); }
 if (empty($country)) { array_push($errors, "Country is required"); }
  if (empty($mobileno)) { array_push($errors, "Mobile No is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM updateac WHERE username='$username' OR email='$email' LIMIT 1";
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

    $query = "INSERT INTO updateac (username, email, first name, last name, address, city, country, postalcode, mobile no) 
          VALUES('$username', '$email', '$password', '$fmane', '$lname', '$address', '$city', '$country', '$pincode', '$mobileno')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You are now logged in";
    header('location: dashboard.php');
  }


// LOGIN USER

?>