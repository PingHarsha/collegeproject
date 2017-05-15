<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

if( isset ($_POST["submit"]) ) {
$a = $_POST['fromuser'];
$b = $_POST['gender'];
$c = $_POST['leavetype'];
$d = $_POST['fromyear'];
$e = $_POST['frommonth'];
$f = $_POST['fromdate'];
$g = $_POST['toyear'];
$h = $_POST['tomonth'];
$i = $_POST['todate'];
$j = $_POST['daysapplied'];
$k = $_POST['subject'];
$l = $_POST['reason'];
$m = $_POST['department'];
$sql = "INSERT INTO facultyrequest (fromuser,gender,leavetype,fromyear,frommonth,fromdate,toyear,tomonth,todate,daysapplied,subject,reason,department,hodstatus,directorstatus)
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','pending','pending')" ;
}

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	header("location: status.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>