<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
if( isset ($_POST["submit"]) ) {
$a = $_POST['userid'];
$b = $_POST['password'];
$sql = "UPDATE faculty SET password='$b'
        WHERE userid='$a'";
}
mysql_select_db('project');
$retval = mysql_query( $sql, $conn );
  header("location: logout.php");
      exit();
  if(! $retval )
{
  die('Could not update data: ' . mysql_error());
}
echo "Updated data successfully\n";
mysql_close($conn);
?>