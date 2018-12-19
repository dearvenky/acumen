<?php

    session_start(); 

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: memberlogin.php");
    }
    include('data.php');

 	



if (isset($_POST['reg_member'])) 
{
		// receive all input values from the form
		$name= mysqli_real_escape_string($db, $_POST['name']);
		$ename= mysqli_real_escape_string($db, $_POST['ename']);
		$mobile= mysqli_real_escape_string($db, $_POST['Mobile_Number']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


		// form validation: ensure that the form is correctly filled
		if (empty($name)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		//$reg=$_SESSION['username'];


		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query="INSERT INTO events (`name`,  `email`, `mobile`,  `password`, ename) VALUES ('$name',  '$email', '$mobile', 
			'$password','$ename')";
			mysqli_query($db, $query);
			$_SESSION['admin'] = $email;
			$_SESSION['success'] = "You are now logged in";
			header('location: index.php');
			mysqli_close($db);
		}

	}
if (isset($_POST['Home'])) 
{
		header('location: index.php');
if (isset($_POST['mem'])) 
{
		header('location: memberlogin.php');

	}
	}
if (isset($_POST['Home'])) 
{
		header('location: index.php');

	}
if (isset($_POST['add'])) 
	{
		header('location: add-details.php');

	}
if (isset($_POST['view'])) 
	{
		header('location: display.php');

	}



?>