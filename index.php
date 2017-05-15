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
  <form align="center">
<a type="button" href="student/index.php" class="btn btn-primary active">STUDENT</a>
</br>
</br>
<a type="button" href="faculty/index.php" class="btn btn-primary active">FACULTY</a>
</br>
</br>
<a type="button" href="hod/index.php" class="btn btn-primary active">HOD</a>
</br>
</br>
<a type="button" href="director/index.php" class="btn btn-primary active">DIRECTOR</a>
</br>
</br>
</form>
</div>
  </div>


</body>
</html>
