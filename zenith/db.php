<?php 

$conn = mysqli_connect("localhost","root","","zenith_elearning") or die("Connection error...");

 if(!$conn){

 	die("Connection Failed!");
 }
 else 

 	echo "success";
 
?>