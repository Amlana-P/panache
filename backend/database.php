<?php 
$ip = 'localhost:3307';
$db_username = 'root';
$db_password = '';
$db_name = 'fusion';

$con = mysqli_connect($ip, $db_username, $db_password, $db_name);

if(mysqli_connect_errno()){
    echo "Failed to establish DB Connection." . mysqli_connect_error();
    exit();
}
/*
if(mysqli_ping($con)){
    echo "Connection established!";
} else {
    echo "Error: " . mysqli_error($con);
}
*/
?>