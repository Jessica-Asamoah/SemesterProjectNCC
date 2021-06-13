<?php 
	session_start();

	// variables
	$firstname = "";
	$lastname = "";
	$username = "";
	$email = "";
	$location = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// Connection to the database
	$db = mysqli_connect('localhost', 'root', '', 'church_operations');

	// Code to register user into database
	if (isset($_POST['create'])) {
		$firstname = mysqli_real_escape_string($db, $_POST['fname']); 
		$lastname = mysqli_real_escape_string($db, $_POST['lname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['passkey']);
		$location = mysqli_real_escape_string($db, $_POST['location']);

		

			$password_1 = md5($password);//encrypt the password before saving in the database
			$query = "INSERT INTO members (firstname, lastname, username, location, email, passkey) 
					  VALUES('$firstname', '$lastname', '$username', '$location', '$email', '$password')";
			mysqli_query($db, $query);

			$_SESSION['email'] = $email;
			// $_SESSION['success'] = "Sign Up Successful";
			header('location: homepage.php');

	}

	

	// Code for logging in
	if (isset($_POST['loginbtn'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['passkey']);

		if (empty($email)) {
			array_push($errors, "E-mail is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password_1 = md5($password);
			$query = "SELECT * FROM members WHERE email='$email' AND passkey='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['email'] = $email;
				// $_SESSION['success'] = "You are now logged in";
				 header('location: homepage.php');
			}
			else {
				array_push($errors, "Wrong email/password combination");
			}
		}
	}
?>