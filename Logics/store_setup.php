<?php

if(empty($_POST['election_type']) || empty($_POST['candidate1']) || empty($_POST['candidate2']) || empty($_POST['candidate3']) || empty($_POST['candidate4'])
	|| empty($_POST['comment']))
{
	die ("Please complete all the form fields");
}



$election_type= $_POST['election_type'];
$candidate1 = $_POST['candidate1'];
$candidate2 = $_POST['candidate2'];
$candidate3 = $_POST['candidate3'];
$candidate4 = $_POST['candidate4'];
$comment = $_POST['comment'];

$sql = "INSERT INTO  election (comments, election_type, candidate1, candidate2,  candidate3, candidate4) 
VALUES  ('$comment', '$election_type', '$candidate1', '$candidate2', '$candidate3', '$candidate4' )";

require "connect.php";

 if($results= mysqli_query($con, $sql))
 {
 	echo "Election successfully set up";
 }

	
?>


