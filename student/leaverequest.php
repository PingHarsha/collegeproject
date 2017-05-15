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
$a = $_POST['from'];
$b = $_POST['branch'];
$c = $_POST['acedemic'];
$d = $_POST['section'];
$e = $_POST['month'];
$f = $_POST['year'];
$g = $_POST['date'];
$h = $_POST['reason'];
$i = $_POST['subject'];
$sql = "INSERT INTO studentrequest (fromuser,branch,acedemic,year,month,date,section,subject,reason,hodstatus,facultystatus,generalsection)
VALUES ('$a','$b','$c','$f','$e','$g','$d','$i','$h','pending','pending','pending')" ;
}

if ($conn->query($sql) === TRUE) {
    header("location: status.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>