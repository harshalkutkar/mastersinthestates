<?php 
require ('../../connect.php'); 
$id = mysqli_real_escape_string($link,$_POST['id']); 
$type = mysqli_real_escape_string($link,$_POST['type']); 
$value = mysqli_real_escape_string($link,$_POST['value']); 
$program_id = mysqli_real_escape_string($link,$_POST['program_id']); 
$query = " INSERT INTO requirements VALUES('$id','$type','$value','$program_id') "; 
 echo $query; 
$result = mysqli_query($link,$query); 
?>