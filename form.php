<?php
    session_start();
    $_SESSION['message'] = '';
    $mysqli = new mysqli("localhost", "root", "", "lpg");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

    if ($_POST['password'] == $_POST['confirmpassword']){


      $username = $mysqli->real_escape_string($_POST['username']);
      $email = $mysqli->real_escape_string($_POST['email']);
      $password = md5($_POST['password']);
      $avatar_path = $mysqli->real_escape_string('avatar/'.$_FILES['avatar']['name']);

      if(preg_match("!avatar!", $_FILES['avatar']['type'])){

        if(copy($_FILES['avatar']['tmp_name'], $avatar_path)){

          $_SESSION['username'] = $username;
          $_SESSION['avatar'] = $avatar_path;

          $sql = "INSERT INTO reguser (username, email, password, avatar)"
                ."VALUES ('$username', '$email','$password','$avatar_path')";



                if($mysqli->query($sql) === true) {
                  $_SESSION['message'] = 'Registration Succesfull! Added $username to the database!';
                  header("location: welcome.php");
                }
                else{
                  $_SESSION['message'] = "User could not be added to database!";
                }
        }
        else{
          $_SESSION['message'] = "File upload failed!";
        }



      }
      else{
        $_SESSION['message'] = "Please upload only GIF, JPG, or PNG images!";
      }

    }
    else{
      $_SESSION['message'] = "Two password do not match!";
    }


  }

?>

    <link rel="stylesheet" href="form.css" type="text/css">
      <div class="body-content">
        <div class="module">
          <h1>Create an account</h1>
          <form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
             <div class="alert alert-error"></div>
              <input type="text" placeholder="User Name" name="username" required />
              <input type="email" placeholder="Email" name="email" required />
              <input type="password" placeholder="Password" name="password" autocomplete="new-password" required />
              <input type="password" placeholder="Confirm Password" name="confirmpassword" autocomplete="new-password" required />
              <div class="avatar"><label>Select your avatar: </label><input type="file" name="avatar" accept="image/*" required /></div>
              <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
         </form>
       </div>
      </div>