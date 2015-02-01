<?php 
require ('../../connect.php'); 
$id = mysqli_real_escape_string($link,$_POST['id']); 
$university_id = mysqli_real_escape_string($link,$_POST['university_id']); 
$name = mysqli_real_escape_string($link,$_POST['name']); 
$type = mysqli_real_escape_string($link,$_POST['type']); 
$query = " INSERT INTO schools VALUES('$id','$university_id','$name','$type') "; 
 echo $query; 
$result = mysqli_query($link,$query); 
?>