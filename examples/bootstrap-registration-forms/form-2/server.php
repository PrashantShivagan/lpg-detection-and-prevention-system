<?php
	$firstname = "";
	$lastname = "";
	$email = "";
	$username = "";
	$password = "";
	$error = 

	$db = mysqli_connect('localhost','root','','reguser');

	if(isset($_POST['regester'])) {

		$firstname = mysql_real_escape_string($_POST['firstname']);
		$lastname = mysql_real_escape_string($_POST['lastname']);
		$email = mysql_real_escape_string($_POST['email']);
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		if(empty($firstname)){

			array_push($error, "firstname is required");
		}


		if(empty($lastname)){

			array_push($error, "lastname is required");
		}


		if(empty($email)){

			array_push($error, "email is required");
		}


		if(empty($username)){

			array_push($error, "username is required");
		}


		if(empty($password)){

			array_push($error, "password is required");
		}

		if(count($errors) == 0){
			$password  = md5($password);
			$sql = "INSERT INTO reguser (firstname, lastname, email, username, password) 
			VALUES ('$firstname', '$lastname', '$email', $username', '$password')";
			mysqli_query($db, $sql);

		}

	}

?>