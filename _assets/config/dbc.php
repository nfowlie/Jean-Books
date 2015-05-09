<?php
  require "config.php";
  
  $conn = mysqli_connect($host, $username, $password) or die("Could not connect");
  if($conn->connect_error){
	  die("connection Failed: " .$conn->connect_error);
  }
  else{
	echo "Connected Successfully";  
  }
  mysqli_select_db($conn, $database);
?>