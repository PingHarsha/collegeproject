<?php
include('databaseconnection.php');
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql="select userid from hod where userid='$user_check'";
$res=mysqli_query($con, $ses_sql);
$row = mysqli_fetch_assoc($res);
$login_session =$row['userid'];

if(!isset($login_session)){
mysqli_close($con); // Closing Connection // Redirecting To Home Page
}
?>