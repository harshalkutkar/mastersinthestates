<?php

//Seriously hardcoded data arrays
$return = array();

//Get Recommendation
$gre_q = $_POST['gre_q'];
$gre_v = $_POST['gre_v'];
$gre_a = $_POST['gre_a'];
$toefl = $_POST['toefl'];
$gpa = $_POST['gpa'];

if ($gre_q > 166 && $gre_v > 161 && $toefl > 110 && $gpa > 3.70)
{
	array_push($return,"Massachusetts Institute of Technology (MIT)");
	array_push($return,"Stanford University");
	array_push($return,"Carnegie Mellon University");
	array_push($return,"University of California- Berkeley");
	array_push($return,"University of Illinois – Urbana Champaign");
	array_push($return,"University of Michigan Ann Arbor");
}

if ($gre_q >= 160 && $gre_v >= 150 && $toefl >= 100 && $gpa >= 3.50)
{
	array_push($return,"Purdue University –West Lafayette");
	array_push($return,"Princeton University");
	array_push($return,"Pennsylvania State University –Univ Park");
	array_push($return,"Georgia Institute of Technology");
	array_push($return,"Texas A & M College Station");
	array_push($return,"Duke University");
}
if ($gre_q >= 150 && $gre_v >= 150 && $toefl >= 100 && $gpa >= 3.00)
{
	array_push($return,"University of Texas-Arlington");
	array_push($return,"Portland state university");
	array_push($return,"New Jersey Institute of Technology");
	array_push($return,"Santa Clara University");
	array_push($return,"San Jose State University");
	array_push($return,"California State University Long Beach");
}

echo json_encode($return);
?>


