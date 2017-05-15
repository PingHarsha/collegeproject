<?php
$mysql_db_hostname = "localhost";
$mysql_db_user = "root";
$mysql_db_password = "";
$mysql_db_database = "project";

$con = mysqli_connect($mysql_db_hostname, $mysql_db_user, $mysql_db_password) or die("Could not connect database");
mysqli_select_db($con, $mysql_db_database) or die("Could not select database");
$query="SELECT * FROM studentrequest where fromuser='12aau06017'";
$result=mysqli_query($con,$query);
echo"<table class='table'>";
   echo" <thead>";
   echo"   <tr>";
      echo"  <th>Firstname</th>";
       echo" <th>Lastname</th>";
        echo"<th>Email</th>";
     echo" </tr>";
   echo" </thead>";
      echo" <tbody>";
   while($row=mysqli_fetch_array($result))
   {

   echo"   <tr class='success'>";
    echo"    <td>John</td>";
    echo"    <td>Doe</td>";
     echo"   <td>john@example.com</td>";
     echo" </tr>";
    echo"  <tr class='danger'>";
    echo"    <td>Mary</td>";
     echo"   <td>Moe</td>";
     echo"   <td>mary@example.com</td>";
    echo"  </tr>";
    echo" <tr class='info'>";
    echo"    <td>",$row['fromuser'],"</td>";
     echo"   <td>Dooley</td>";
     echo"   <td>july@example.com</td>";
     echo" </tr>";
   }
    echo"</tbody>";
 echo" </table>";

?>