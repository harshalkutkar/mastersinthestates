<?php 
require ('../../connect.php'); 
$id = '';
$school_id = mysqli_real_escape_string($link,$_POST['school_id']); 
$university_id = mysqli_real_escape_string($link,$_POST['university_id']); 
$name = mysqli_real_escape_string($link,$_POST['name']); 
$description = mysqli_real_escape_string($link,$_POST['description']); 
$website = mysqli_real_escape_string($link,$_POST['website']); 
$query = " INSERT INTO programs VALUES('$id','$school_id','$university_id','$name','$description','$website') ";
 echo $query; 
$result = mysqli_query($link,$query) or die(mysqli_error($link));
if ($result) echo "INSERTED SUCCESSFULLY";
?>