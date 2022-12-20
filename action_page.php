<?php
$dbuser="root";
$dbpwd="";
$dbserver="localhost";
$dbname="todayonegrab";
$conn = new mysqli($dbserver, $dbuser, $dbpwd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Error while plaCING THE ORDER");
  }
$sql = "INSERT INTO orderdetails (cusname, persons, ordertime, addinfo) VALUES ('".$_POST["Name"]."', '".$_POST["People"]."', '".$_POST["date"]."', '".$_POST["Message"]."')";
if ($conn->query($sql) === TRUE) {
    echo " O R D E R    P L A C E D   S U C C E S S F U L L Y ";
  } else {
    echo "Error while plaCING THE ORDER";
  }
$conn->close();
?>
<html>
    <body background="logo4.png" height="700px" width="1200">
    </body>
</html>