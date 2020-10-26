<?php 

include('database.php');

$username = "";
$college = "";
$contact = "";
$email = "";
$password = "";
$errors = array();
$_SESSION['success'] = "";


// User Registration
if(isset($_POST['user_reg'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $college = mysqli_real_escape_string($con, $_POST['college']);
    $contact = mysqli_real_escape_string($con, $_POST['contact']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    $password = md5($password);
    $query = "INSERT INTO users (username, college, contact, email, password) VALUES('$username', '$college', '$contact', '$email', '$password')";
    $query_result = mysqli_query($con, $query) or die(mysqli_error());

    if($query_result){
        $_SESSION['username'] = $username;
        $redirectUrl = './dashboard.php';
    
        echo '<script type="application/javascript">alert("Successfully Registered."); window.location.href = "'.$redirectUrl.'";</script>';
    }else{
        echo "Error!". mysqli_error();
        echo '<script type="application/javascript">alert("Error! '.mysqli_error().'");</script>';
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

            $redirectUrl = './dashboard.php';
            echo '<script type="application/javascript">alert("You are now logged in."); window.location.href = "'.$redirectUrl.'";</script>';

            $username_query = "SELECT username FROM USERS WHERE email = '$email' AND password = '$password'";
            $name_results = mysqli_query($con, $username_query);
            $name = mysqli_fetch_array($name_results);
            $_SESSION['username'] = $name['username'];

            $role_query = "SELECT role FROM USERS WHERE email = '$email' AND password = '$password'";
            $role_results = mysqli_query($con, $role_query);
            $role = mysqli_fetch_array($role_results);
            $_SESSION['role'] = $role['role'];

            $_SESSION['success'] = $username . ", You are now logged in";
    
        }else {
            array_push($errors, "Invalid Credentials");
            echo "Error!". mysqli_error($con);
            echo '<script type="application/javascript">alert("Error! '.mysqli_error($con).'");</script>';
        }
    }

}

?>