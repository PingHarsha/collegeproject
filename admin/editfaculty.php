
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.nbkrist.org/">NBKRIST</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ADD USER<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="addstudent.php">STUDENT</a></li>
          <li><a href="addfaculty.php">FACULTY</a></li>
        </ul>
      </li>
	    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">EDIT USER<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="editstudent.php">STUDENT</a></li>
          <li><a href="editfaculty.php">FACULTY</a></li>
        </ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">VIEW USER<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="viewstudent.php">STUDENT</a></li>
          <li><a href="viewfaculty.php">FACULTY</a></li>
        </ul>
      </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> LOGOUT</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <h2>Edit Faculty:</h2>
  <form role="form">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="usr">
    </div>
	<div class="form-group">
      <label for="uid">User Id:</label>
      <input type="text" class="form-control" id="usr">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd">
    </div>
	<div class="form-group">
      <label for="sel1">Branch:</label>
      <select class="form-control" id="sel1">
        <option>CSE</option>
        <option>ECE</option>
        <option>EEE</option>
        <option>MECH</option>
		<option>CIVIL</option>
      </select>
	 </div>
	 <br/>
	 <p><b>Charge:</b></p>
	<label class="radio-inline">
      <input type="radio" name="optradio">Yes
    </label>
	<label class="radio-inline">
      <input type="radio" name="optradio">No
    </label>
	<br/>
	<p><b>Year:</b></p>
    <label class="radio-inline">
      <input type="radio" name="optradio">1
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">2
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">3
    </label>
	<label class="radio-inline">
      <input type="radio" name="optradio">4
    </label>
	<br/>
	<p><b>Section:</b></p>
	<label class="radio-inline">
      <input type="radio" name="optradio">A
    </label>
	<label class="radio-inline">
      <input type="radio" name="optradio">B
    </label>
	<br/>
	<p><b>Gender:</b></p>
	<label class="radio-inline">
      <input type="radio" name="optradio">Male
    </label>
	<label class="radio-inline">
      <input type="radio" name="optradio">Female
    </label>
	<br/>
	<div class="form-group">
      <label for="phone">Mobile:</label>
      <input type="text" class="form-control" id="usr">
    </div>
<button type="submit" class="btn btn-default">Submit</button>
	</form>  


</body>
</html>
