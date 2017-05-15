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
<script>
function myFunction() {
    var oneDay = 24*60*60*1000;
	gender=("<?php echo $gender?>");
	var leaveType=document.getElementById("leaveType").value;
    var fromDate = document.getElementById("fromDate").value;
	var fromMonth = document.getElementById("fromMonth").value;
	var fromYear = document.getElementById("fromYear").value;
	var toYear = document.getElementById("toYear").value;
	var toMonth = document.getElementById("toMonth").value;
	var toDate = document.getElementById("toDate").value;
	var firstDate = new Date(fromYear,fromMonth,fromDate);
	var secondDate = new Date(toYear,toMonth,toDate);
	var diffDays = Math.round(Math.abs((firstDate.getTime() - secondDate.getTime())/(oneDay)));
	document.getElementById('applied').value = ""+diffDays;
	var leaveType=document.getElementById("leaveType").value;
	totalCasualLeaves=("<?php echo $casualleaves?>");
	availableCasualLeaves=("<?php echo $cl?>");
	totalSpecialCasualLeaves=("<?php echo $specialcasualleaves?>");
	availableSpecialCasualLeaves=("<?php echo $scl?>");
	totalEarnedLeaves=("<?php echo $specialcasualleaves?>");
	availableEarnedLeaves=("<?php echo $scl?>");
	totalHalfPayLeaves=("<?php echo $halfpayleaves?>");
	availableHalfPayLeaves=("<?php echo $hpl?>");
	totalMeternityLeaves=("<?php echo $halfpayleaves?>");
	availableMeternityLeaves=("<?php echo $hpl?>");
					
				while(leaveType=="CASUAL LEAVE")
				{
					document.getElementById('canapply').value = ""+totalCasualLeaves;
						  document.getElementById('available').value = ""+availableCasualLeaves;
						  break;
				}
				while(leaveType=="EARNED LEAVE")
				{
					document.getElementById('canapply').value = ""+totalEarnedLeaves;
						  document.getElementById('available').value = ""+availableEarnedLeaves;
						  break;
				}
				while(leaveType=="SPECIAL CASUAL LEAVE")
				{
					document.getElementById('canapply').value = ""+totalSpecialCasualLeaves;
						  document.getElementById('available').value = ""+availableSpecialCasualLeaves;
						  break;
				}
				while(leaveType=="HALF PAY LEAVE")
				{
					document.getElementById('canapply').value = ""+totalHalfPayLeaves;
						  document.getElementById('available').value = ""+availableHalfPayLeaves;
						  break;
				}
				while(leaveType=="METERNITY LEAVE")
				{
					document.getElementById('canapply').value = ""+totalMeternityLeaves;
						  document.getElementById('available').value = ""+availableMeternityLeaves;
						  break;
				}
	while(gender=="MALE")
	{
		var x = document.getElementById("leaveType").options[5].disabled = true;
		break;
	}
}
</script>
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

	<div class="container">
		<div class="jumbotron">
		<form class="form" role="form"  action = "leavepost.php" method = "POST">
			<h1>REQUEST LEAVE</h1> 
			 <p>ERROR MESSAGES GOES HERE.</p> 
						<div class="form-group">
							<label for="user">USERID:</label>
							<input type="text" class="form-control" id="userid" value="<?php echo $name;?>" readonly>
							<input type="hidden" class="form-control" name="fromuser" value="<?php echo $name?>">
						</div>
						
						<div class="form-group">
							<label for="gender">GENDER:</label>
							<input type="text" class="form-control" id="gender" value="<?php echo $gender;?>" readonly>
							<input type="hidden" class="form-control" name="gender" value="<?php echo $gender?>">
						</div>
						<div class="form-group">
							<label for="sel1">Select list:</label>
							<select class="form-control" name="leavetype" id="leaveType" onchange="myFunction()" >
							<option readonly>SELECT AN OPTION</option>
							<option><?php echo "CASUAL LEAVE"?></option>
							<option><?php echo "SPECIAL CASUAL LEAVE"?></option>
							<option><?php echo "EARNED LEAVE"?></option>
							<option><?php echo "HALF PAY LEAVE"?></option>
							<option><?php echo "METERNITY LEAVE"?></option>
				  </select>
				</div><br>
						<div class="form-group">
						<h5>LEAVES CAN BE APPLIED</h5>
							<input type="text" class="form-control" id="canapply" readonly>
						</div>
						<div class="form-group">
						<h5>LEAVES AVAILABLE</h5>
							<input type="text" class="form-control" id="available" readonly>
						</div><br>
						<h3>FROM </h3>
						<div class="form-group">
						<label for="sel1">YEAR:</label><br>
						<select class="form-control"  id="fromYear" name="fromyear" onchange="myFunction()">
								<option><?php $year = date("y");  echo $year ?></option>
								<option><?php $year = date("y"); $year++;  echo $year ?></option>
							</select>
							</div>
						<div class="form-group">
							<label for="sel1">MONTH:</label><br>
							<select class="form-control" id="fromMonth" name="frommonth" onchange="myFunction()">
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
						  <div class="control-group">
    <label class="control-label" for="DATE">Date</label>
	<select  class="form-control" id="fromDate" name="fromdate"  onchange="myFunction()" required>
	<option><?php $today = date("d");  echo $today ?></option>
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
	<option>13</option>
    <option>14</option>
    <option>15</option>
	<option>16</option>
    <option>17</option>
	<option>18</option>
    <option>19</option>
	<option>20</option>
    <option>21</option>
    <option>22</option>
	<option>23</option>
    <option>24</option>
	<option>25</option>
    <option>26</option>
	<option>27</option>
    <option>28</option>
    <option>29</option>
	<option>30</option>
    <option>31</option>
	</select>
  </div><br>
						<h3>TO </h3>
						<div class="form-group">
						<label for="sel1">YEAR:</label><br>
						<select class="form-control" id="toYear" name="toyear" onchange="myFunction()">
								<option><?php $year = date("y");  echo $year ?></option>
								<option><?php $year = date("y"); $year++;  echo $year ?></option>
							</select>
							</div>
						<div class="form-group">
							<label for="sel1">MONTH:</label><br>
							<select class="form-control" id="toMonth" name="tomonth" onchange="myFunction()">
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
						<div class="control-group">
    <label class="control-label" for="DATE">Date</label>
	<select  class="form-control" id="toDate" name="todate"  onchange="myFunction()" required>
	<option><?php $today = date("d");  echo $today ?></option>
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
	<option>13</option>
    <option>14</option>
    <option>15</option>
	<option>16</option>
    <option>17</option>
	<option>18</option>
    <option>19</option>
	<option>20</option>
    <option>21</option>
    <option>22</option>
	<option>23</option>
    <option>24</option>
	<option>25</option>
    <option>26</option>
	<option>27</option>
    <option>28</option>
    <option>29</option>
	<option>30</option>
    <option>31</option>
	</select>
  </div><br>
						<div class="form-group">
							<label for="applied">NUMBER OF DAYS LEAVE IS APPLIED FOR:</label><br>
							<input type="text" class="form-control" id="applied" name="daysapplied" required readonly>
						</div><br>
						<div class="form-group">
							<label for="subject">SUBJECT:</label><br>
							<input type="text" class="form-control" id="subject" name="subject" required>
						</div><br>
						<div class="form-group">
							<label for="comment">REASON:</label><br>
							<textarea class="form-control" rows="5" id="comment" name="reason" required></textarea>
						</div><br><br>
						<input type="hidden" class="form-control" id="department" name="department" value="<?php echo $department?>">
						<input type = "submit" name = "submit" /></br>
						<p id="demo"></p>

						</form>
		  </div>
 
	</div>
	
</body>

</html>

