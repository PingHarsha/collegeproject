<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include('databaseconnection.php');
// SQL query to fetch information of registerd users and finds user match.
$query ="SELECT * from hod where password='$password' AND userid='$username'";
$res=mysqli_query($con, $query);
$rows = mysqli_num_rows($res);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($con); // Closing Connection
}
}
?>