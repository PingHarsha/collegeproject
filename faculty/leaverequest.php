<?php
include('session.php');
isset($_SESSION) || session_start();
?>
<html>

	<head>
  <title>N.B.K.R INSTITUTE OF SCIENCE & TECHNOLOGY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  

</head>
	<body>
	<?php
include "databaseconnection.php"; //Include the database connection script
$query="SELECT * FROM faculty WHERE userid='".mysqli_real_escape_string($con,$_SESSION["login_user"])."'";
//Check the logged in user information from the database
$check_user_details = mysqli_query($con,$query);
if (!$query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}


//Get the logged in user info from the database
$get_user_details = mysqli_fetch_array($check_user_details);

//Pass all the logged in user info to variables to easily display them when needed
$user_id = strip_tags($get_user_details['userid']);
$name = strip_tags($get_user_details['name']);
$gender = strip_tags($get_user_details['gender']);
$department = strip_tags($get_user_details['department']);
$facultytype = strip_tags($get_user_details['facultytype']);
$inchargestatus = strip_tags($get_user_details['inchargestatus']);
$inchargeyear = strip_tags($get_user_details['inchargeyear']);
$inchargesection = strip_tags($get_user_details['inchargesection']);
$joiningdate = strip_tags($get_user_details['joiningdate']);
$joiningmonth = strip_tags($get_user_details['joiningmonth']);
$joiningyear = strip_tags($get_user_details['joiningyear']);
$casualleaves = strip_tags($get_user_details['casualleaves']);
$cl = strip_tags($get_user_details['cl']);
$specialcasualleaves = strip_tags($get_user_details['specialcasualleaves']);
$scl = strip_tags($get_user_details['scl']);
$halfpayleaves = strip_tags($get_user_details['halfpayleaves']);
$hpl = strip_tags($get_user_details['hpl']);
$earnedleaves = strip_tags($get_user_details['earnedleaves']);
$el = strip_tags($get_user_details['el']);
$meternityleaves = strip_tags($get_user_details['meternityleaves']);
$ml = strip_tags($get_user_details['ml']);
?>
		<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="http://nbkrist.org">N.B.K.R.I.S.T.</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">INSTRUCTIONS <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="instructions.php">FACULTY</a></li>
          </ul>
        </li>
        <li><a href="index.php">HOME</a></li>
		<li><a href="request.php">NEW REQUEST</a></li>
		 <li><a href="respond.php">RESPOND</a></li>
        <li><a href="status.php">STATUS</a></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> LOG OUT</a></li>
    </div>
  </div>
</nav>
</br>
</br>
</br>
<form align="center">
<img src="nbkrist.png"  class="img-rounded" alt="Cinque Terre" width="200" height="200">
</form>
<form class="form-inline" role="form" oninput="myFunction()">
	<div class="container">
		<div class="jumbotron">
			<h1>REQUEST LEAVE</h1> 
			 <p>ERROR MESSAGES GOES HERE.</p> 
						<div class="form-group">
							<label for="user">USERID:</label>
							<input type="text" class="form-control" id="userid" value="<?php echo $name;?>" readonly>
						</div>
						
						<div class="form-group">
							<label for="gender">GENDER:</label>
							<input type="text" class="form-control" id="gender" value="<?php echo $gender;?>" readonly>
						</div>
						<div class="form-group">
						 <h3>LEAVE TYPE</h3>
						<label class="radio-inline"><input type="radio" name="optradio">CASUAL LEAVE</label>
						<label class="radio-inline"><input type="radio" name="optradio">SPECIAL CASUAL LEAVE</label>
						<label class="radio-inline"><input type="radio" name="optradio">HALF PAY LEAVE</label>
						<label class="radio-inline"><input type="radio" name="optradio">EARNED LEAVE</label>
						<label class="radio-inline"><input type="radio" name="optradio">METERNITY LEAVE</label>
						</div><br>
						<div class="form-group">
						<h5>LEAVES CAN BE APPLIED</h5>
							<input type="text" class="form-control" id="leavedays" readonly>
						</div>
						<div class="form-group">
						<h5>LEAVES AVAILABLE</h5>
							<input type="text" class="form-control" id="leavedays" readonly>
						</div><br>
						<h3>FROM </h3>
						<div class="form-group">
							<label for="user">YEAR:</label><br>
							<input type="text" class="form-control" id="year" value="<?php $fromyear=date ('y'); echo $fromyear ; ?>" readonly>
						</div>
						<div class="form-group">
							<label for="sel1">MONTH:</label><br>
							<select class="form-control" id="sel1">
								<option><?php $today = date("m");  echo $today ?></option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
						</div>
						<div class="form-group">
							<label for="user">DATE:</label><br>
							<input type="text" class="form-control" id="year" value="<?php $month=date ('d'); echo $month ; ?>" >
						</div><br>
						<h3>TO</h3> 
						<div class="form-group">
							<label for="sel1">YEAR</label><br>
							<select class="form-control" id="sel1">
								<option><?php $year = date("y");  echo $year ?></option>
								<option><?php $year = date("y"); $year++;  echo $year ?></option>
							</select>
						</div>
						<div class="form-group">
							<label for="sel1">MONTH</label><br>
							<select class="form-control" id="sel1">
								<option><?php $today = date("m");  echo $today ?></option>
								<option>01</option>
								<option>02</option>
								<option>03</option>
								<option>04</option>
								<option>05</option>
								<option>06</option>
								<option>07</option>
								<option>08</option>
								<option>09</option>
								<option>10</option>
								<option>11</option>
								<option>12</option>
							</select>
						</div>
						
						<div class="form-group">
							<label for="user">DATE</label><br>
							<input type="text" class="form-control" id="year" value="<?php $month=date ('d'); echo $month ; ?>" >
						</div><br>
						<div class="form-group">
							<label for="subject">NUMBER OF DAYS LEAVE IS APPLIED FOR:</label><br>
							<input type="text" class="form-control" id="subject">
						</div><br>
						<div class="form-group">
							<label for="subject">SUBJECT:</label><br>
							<input type="text" class="form-control" id="subject">
						</div><br>
						<div class="form-group">
							<label for="comment">REASON:</label><br>
							<textarea class="form-control" rows="5" id="comment"></textarea>
						</div><br><br>
						<input type="submit">
		  </div>
 
	</div>
	</form>
</body>

</html>

