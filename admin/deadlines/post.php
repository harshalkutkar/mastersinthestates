<?php 
require ('../../connect.php'); 
$id = mysqli_real_escape_string($link,$_POST['id']); 
$program_id = mysqli_real_escape_string($link,$_POST['program_id']); 
$datetime = mysqli_real_escape_string($link,$_POST['datetime']); 
$query = " INSERT INTO deadlines VALUES('$id','$program_id','$datetime') "; 
 echo $query; 
$result = mysqli_query($link,$query); 
?>