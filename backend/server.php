<?php 
if(!isset($_SESSION)) 
{ 
    session_start(); 
} 
include('database.php');

$username = "";
$insta_id = "";
$college = "";
$contact = "";
$email = "";
$password = "";
$confirmpassword = "";
$errors = array();
$_SESSION['success'] = "";


// User Registration
if(isset($_POST['user_reg'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $insta_id = mysqli_real_escape_string($con, $_POST['insta_id']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirmpassword = mysqli_real_escape_string($con, $_POST['confirmpassword']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    if($password == $confirmpassword){
        $password = md5($password);
        $query = "INSERT INTO users (username,instagramid, collegename, contactnumber, email, password) VALUES('$username', '$insta_id', '$college', '$contact', '$email', '$password')";
        $query_result = mysqli_query($con, $query) or die('Error: ' . mysqli_error($con));

        if($query_result){
            $_SESSION['username'] = $username;
            $redirectUrl = './dashboard.php';
            echo '<script type="application/javascript">alert("Successfully Registered."); window.location.href = "'.$redirectUrl.'";</script>';
        }else{
            echo "Error!". mysqli_error();
            echo '<script type="application/javascript">alert("Error! '.mysqli_error().'");</script>';
        }
    } else{
        array_push($errors, 'Passwords doesnt match!');
        $redirectUrl = './register-login.php';
        echo '<script type="application/javascript">alert("Password doesn\'t match!."); window.location.href = "'.$redirectUrl.'";</script>';
    }
    

}

// Admin | User Login

if(isset($_POST['user_login'])){
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    if(empty($email)){
        array_push($errors, 'Email field is blank!');
    }
    else if(empty($password)){
        array_push($errors, 'Password field is blank!');
    }

    if(count($errors) == 0){
        $password = md5($password);
        $query = "SELECT * FROM USERS WHERE email = '$email' AND password = '$password'";
        $results = mysqli_query($con, $query) or die (mysqli_error($con));

        if (mysqli_num_rows($results) == 1) {

            $query = "SELECT username, instagramid, role, id FROM users WHERE email = '$email' AND password = '$password'";
            $results_obj = mysqli_query($con, $query);
            $result = mysqli_fetch_array($results_obj);

            

            $_SESSION['username'] = $result['username'];
            $_SESSION['user_id'] = $result['id'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['instagramid'] = $result['instagramid'];
            echo($_SESSION['role']);
            $_SESSION['success'] = $username . ", You are now logged in";

            $redirectUrl = './dashboard.php';
            echo '<script type="application/javascript">alert("You are now logged in."); window.location.href = "'.$redirectUrl.'";</script>';
            exit;
            
        }else {
            array_push($errors, "Invalid Credentials");
            $redirectUrl = './dashboard.php';
            echo '<script type="application/javascript">alert("Invalid Credentials."); window.location.href = "'.$redirectUrl.'";</script>';
        }
    }

}

?>