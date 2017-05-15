<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "project";

$con = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysqli_select_db($con, $mysql_db_database) or die("Could not select database");
?>