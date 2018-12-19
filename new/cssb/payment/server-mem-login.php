<?php
include('data.php');
    session_start(); 

    $username = "";
    $email    = "";
    $errors = array(); 
    $_SESSION['success'] = "";
    $errors = array(); 
if (isset($_POST['Home'])) 
{
        header('location: index.php');

    }

if (isset($_POST['login_admin'])) 
{
        $email= mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (empty($email)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM adpay WHERE email='$email' AND password='$password'";
            $results = mysqli_query($db, $query);

            if (mysqli_num_rows($results) == 1) {
                $_SESSION['payadmin'] = $email;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }else {
                array_push($errors, "Wrong username/password combination");
            }
        }
    }

?>