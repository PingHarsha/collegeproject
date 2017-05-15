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
<script>
function myFunction() {
    var x = document.getElementById("mySelect").value;
	var y = document.getElementById("monthOf").value;
	z=("<?php $date = date("d");  echo $date?>");
	if(x<z)
    document.getElementById("demo").innerHTML = "You have selected a wrong date " + x+"<br>month: "+y;
	else
		document.getElementById("demo").innerHTML = "Your selected date " + x+"<br>month: "+y;
}
</script>
</head>
	<body>
	<?php
include "databaseconnection.php"; //Include the database connection script
$query="SELECT * FROM student WHERE userid='".mysqli_real_escape_string($con,$_SESSION["login_user"])."'";
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
$branch = strip_tags($get_user_details['branch']);
$section = strip_tags($get_user_details['section']);
$acedemic = strip_tags($get_user_details['acedemic']);
$password = strip_tags($get_user_details['password']);
$overall = strip_tags($get_user_details['overall']);
$leave = strip_tags($get_user_details['leave']);
$lim = 1;
$eligibility= $lim- $leave;
if($eligibility==0)
{
	header("location: status.php");
}

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
            <li><a href="instructions.php">STUDENT</a></li>
          </ul>
        </li>
        <li><a href="index.php">HOME</a></li>
		<li><a href="request.php">NEW REQUEST</a></li>
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
</form   align="center">
<div class="container">
  <div class="jumbotron">
      <form role="form" action = "leaverequest.php" method = "POST">
  <div class="form-group">
    <label for="user">USER ID: <?php echo "$user_id"?></label>
    <input type="hidden" class="form-control" name="from" value="<?php echo "$user_id"?>">
  </div>
 

  <div class="form-group">
   <label for="branch"> BRANCH: <?php echo "$branch"?></label>
    <input type="hidden" class="form-control" name="branch" value="<?php echo "$branch"?>">
  </div>
  <div class="form-group">
    <label for="acedemic">ACEDEMIC:<?php echo "$acedemic" ;?></label>
    <input type="hidden" class="form-control"  name="acedemic" value=" <?php echo "$acedemic" ;?> "  >
	
  </div>
  <div class="form-group">
    <label for="section">SECTION:<?php echo "$section" ;?></label>
    <input type="hidden" class="form-control"  name="section" value=" <?php echo "$section" ;?>"   >
	
  </div>
    <div class="form-group">
    <label for="Month">MONTH:  <?php $month = date("m");  echo $month?></label>
    <input type="hidden" class="form-control" id="monthOf" name="month"  onchange="myFunction()" value="<?php $month = date("m");  echo $month?>">
  </div>
   <div class="form-group">
    <label for="YEAR">YEAR:  <?php $year=date ('y'); echo $year ;?></label>
    <input type="hidden" class="form-control" name="year" value="<?php $year=date ('y'); echo $year ;?>">
  </div>
   <div class="control-group">
    <label class="control-label" for="DATE">Date</label>
	<select  class="form-control" id="mySelect" name="date"  onchange="myFunction()" required>
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

<p id="demo"></p>

  </div>
  <div class="form-group">
    <label for="reason">REASON:</label>
    <input type="text" class="form-control" name="reason" required >
  </div>
  <div class="form-group">
  <label for="SUBJECT">SUBJECT:</label>
  <textarea class="form-control" rows="5" name="subject" required></textarea>
</div>
<input type = "submit" name = "submit" /></br>
</form>
</div>

	</body>

</html>

