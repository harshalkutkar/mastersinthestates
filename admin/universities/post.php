<?php 
require ('../../connect.php'); 
$id = mysqli_real_escape_string($link,$_POST['id']); 
$name = mysqli_real_escape_string($link,$_POST['name']); 
$location = mysqli_real_escape_string($link,$_POST['location']); 
$be = mysqli_real_escape_string($link,$_POST['be']); 
$cs = mysqli_real_escape_string($link,$_POST['cs']); 
$acceptance = mysqli_real_escape_string($link,$_POST['acceptance']); 
$avg_q = mysqli_real_escape_string($link,$_POST['avg_q']); 
$avg_gpa = mysqli_real_escape_string($link,$_POST['avg_gpa']); 
$employer_rating = mysqli_real_escape_string($link,$_POST['employer_rating']); 
$query = " INSERT INTO universities VALUES('$id','$name','$location','$be','$cs','$acceptance','$avg_q','$avg_gpa','$employer_rating') "; 
 echo $query; 
$result = mysqli_query($link,$query); 
?>