<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>LOG IN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js">
</script>
<script type="text/javascript" >
$(function() {
$(".submit").click(function() {
var username = $("#username").val();
var password = $("#password").val();
var dataString = '&username=' + username + '&password=' + password;

if(username=='' || password=='')
{
$('.success').fadeOut(200).hide();
$('.error').fadeOut(200).show();
}
else
{
$.ajax({
type: "POST",
url: "changepassword.php",
data: dataString,
success: function(){
$('.success').fadeIn(200).show();
$('.error').fadeOut(200).hide();
}
});
}
return false;
});
});
</script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="http://nbkrist.org">NBKRIST</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        
        <li><a href="../student/index.php">STUDENT LOGIN</a></li>
        <li><a href="../faculty/index.php">FACULTY LOGIN</a></li> 
        <li><a href="../hod/index.php">HOD LOGIN</a></li> 
		<li><a href="../director/index.php">DIRECTOR LOGIN</a></li>
		
      </ul>
    </div>
  </div>
</nav>
</br>
</br>
</br>
<form id="image" align="center">
<img   src="nbkrist.png" class="img-rounded" alt="Cinque Terre" width="250" height="250">
</form>
<div class="container">
  <div class="jumbotron">
<div class="container" id="main">
  <h2 align="center">LOGIN FORM</h2>
  <form role="form" name="form" method="post" >
    <div class="form-group">
      <label for="userid">USER ID:</label>
      <input type="text" class="form-control" id="name" name="username" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="password">PASSWORD:</label>
      <input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button name="submit" type="submit" class="btn btn-default" value=" submit ">Submit</button>
	<span class="error" style="display:none"> Please Enter Valid Data</span>
  </form>
</div>
  </div>
</div>

</body>
</html>
