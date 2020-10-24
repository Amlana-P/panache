<?php 
include('database.php');


if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

$username = "";
$college = "";
$contact = "";
$email = "";
$password = "";
$errors = array();
$_SESSION['success'] = "";


// Admin Login

if(isset($_POST['login_user'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if(empty($username)){
        array_push($errors, 'Username field is blank!');
    }
    else if(empty($password)){
        array_push($errors, 'Password field is blank!');
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM USERS WHERE username = '$username' AND password = '$password'";
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $username . ", You are now logged in";
            header('location: adminpanel.php');
        }else {
            array_push($errors, "Invalid Credentials");
        }
    }
}

// User Registration
if(isset($_POST['user_reg'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $password = md5($password);
    $query = "INSERT INTO users (username, college, contact, email, password) VALUES('$username', '$college', '$contact', '$email', '$password')";
    mysqli_query($con, $query);

    if(mysqli_query($con, $query)){
        $redirectUrl = '../index.html';
    
        echo '<script type="application/javascript">alert("Successfully Registered"); window.location.href = "'.$redirectUrl.'";</script>';
    }else{
        echo "Error!". mysql_error();
        echo '<script type="application/javascript">alert("Error! '.mysql_error().'");</script>';
    }

}

// User Login

if(isset($_POST['user_login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    if(empty($email)){
        array_push($errors, 'Username field is blank!');
    }
    else if(empty($password)){
        array_push($errors, 'Password field is blank!');
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password'";
        $results = mysqli_query($con, $query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = $username . ", You are now logged in";
            header('location: dashboard.php');
        }else {
            array_push($errors, "Invalid Credentials");
        }
    }
}

?>