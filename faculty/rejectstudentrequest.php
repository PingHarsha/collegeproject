<<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
include "respond.php"; 
    // sql to delete a record
    $sql = "UPDATE studentrequest set facultystatus='REJECTED' WHERE id='$a'";

    // use exec() because no results are returned
    $conn->exec($sql);
	  header("location: respond.php");
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>