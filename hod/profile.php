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
  <script src="password.js"></script>

</head>
	<body>
	<?php
include "databaseconnection.php"; //Include the database connection script
$query="SELECT * FROM hod WHERE userid='".mysqli_real_escape_string($con,$_SESSION["login_user"])."'";
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
		 <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">RESPOND <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="facultyrespond.php">FACULTY</a></li>
			 <li><a href="studentrespond.php">STUDENT</a></li>
          </ul>
        </li>
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
<div class="container">
  <div class="jumbotron">
    <h4 align="center"><b>HELLO <?php echo "$user_id"?></b></h4>      
		<div class="jumbotron">
		<div class="panel-group">
    <div class="panel panel-default">
	
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1">PROFILE</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="jumbotron">
		
  <div class="container">
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">PROFILE</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">PROFILE</h4>
        </div>
        <div class="modal-body">
          <ul class="list-group">
    <li class="list-group-item" align="center">NAME:<?php echo "$name"?>
	</li>
	<li class="list-group-item" align="center">UNIVRSITY NUMBER:<?php echo "$user_id"?>
	</li>
	 <li class="list-group-item" align="center">GENDER:<?php echo "$gender"?>
	</li>
	 <li class="list-group-item" align="center">BRANCH:<?php echo "$branch"?>
	</li>
	 <li class="list-group-item" align="center">SECTION:<?php echo "$section"?>
	</li>
  </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
		</div>

      </div>
    </div>
  </div>
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2">CHANGE PASSWORD</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <form action = "changepassword.php" method = "POST" align="center"></br>
         USER ID: </br><input type = "text" name = "userid"  value="<?php echo "$user_id"?>" /></br>
         NEW PASSWORD: </br><input type = "password" name = "password" /></br></br>
         <input type = "submit" name = "submit"/></br>
      </div>
    </div>
		
		</div>
  </div>    
</div>

	</body>

</html>

