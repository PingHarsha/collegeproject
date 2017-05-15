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
<?php
include "databaseconnection.php"; 
$query="select * from studentrequest where branch='$department'";
$result=mysqli_query($con,$query);
echo"<div class='table-responsive'>";
echo"<table class='table'>";
   echo" <thead>";
   echo"   <tr>";
   echo"  <th>#</th>";
      echo"  <th>USER ID</th>";
	  echo"<th>DATE</th>";
	  echo"<th>SUBJECT</th>";
	  echo"<th>REASON</th>";
       echo" <th>IN-CHARGE STATUS</th>";
		echo"<th>STATUS</th>";
     echo" </tr>";
   echo" </thead>";
      echo" <tbody>";
   while($row=mysqli_fetch_array($result))
   {
	if($row["hodstatus"]=="ACCEPTED" || $row["hodstatus"]=="REJECTED")
	{
		echo" <tr class='info'>";
	echo"    <td>",$row['id'],"</td>";
    echo"    <td>",$row['fromuser'],"</td>";
	echo"   <td>",$row['date'],"-",$row['month'],"-",$row['year'],"</td>";
	echo"    <td>",$row['subject'],"</td>";
	echo"    <td>",$row['reason'],"</td>";
     echo"   <td>",$row['facultystatus'],"</td>";
	 $a=$row["id"];
	 echo"    <td>",$row['hodstatus'],"</td>";
     echo" </tr>";
	}
	else{
    echo" <tr class='info'>";
	echo"    <td>",$row['id'],"</td>";
    echo"    <td>",$row['fromuser'],"</td>";
	echo"   <td>",$row['date'],"-",$row['month'],"-",$row['year'],"</td>";
	echo"    <td>",$row['subject'],"</td>";
	echo"    <td>",$row['reason'],"</td>";
     echo"   <td>",$row['facultystatus'],"</td>";
	 $a=$row["id"];
	 echo"    <td>",$row['hodstatus'],"<form method='post' action = 'acceptstudentrequest.php' class='form' id='ACCEPT'>
	 <input type = 'hidden' name = 'id' value=",$a,"/>
<input type = 'submit' VALUE = 'ACCEPT'/></form><form method='post' action = 'rejectstudentrequest.php' class='form' id='REJECT'>
	 <input type = 'hidden' name = 'id' value=",$a,"/>
<input type = 'submit' value = 'REJECT'/></form></td>";
     echo" </tr>";
   }
   }
    echo"</tbody>";
 echo" </table>";
 echo"</div>";

?>
  
  </div>
</div>
</body>
</html>