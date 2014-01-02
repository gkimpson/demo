<?php
// Create connection
$con=mysqli_connect("localhost","gavin","passw0rd","demo");

// Check connection
if (mysqli_connect_errno())
  {
  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
  } 
  else
  {
  	echo "Connection made";
  }
?>