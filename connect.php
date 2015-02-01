<?php

//vars
$username = "root";
$password = "";
$host = "localhost:3306";
$db = "mastersinthestates";

//conection:
$link = mysqli_connect($host,$username,$password,$db) or die("Error " . mysqli_error($link));

?>