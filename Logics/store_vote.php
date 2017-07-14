<?php

if(empty($_POST['election_type']) || empty($_POST['comment']) || empty($_POST['voter_name']) || empty($_POST['candidate']))
{
	die ("Please complete all the form fields");
}


	

$election_type= $_POST['election_type'];
$candidate = $_POST['candidate'];
$comment = $_POST['comment'];
$voter_name = $_POST['voter_name'];

$sql = "INSERT INTO  votes (candidate_comment, election_type,  candidate, voter_name, vote) 
VALUES  ('$comment', '$election_type', '$candidate', '$voter_name', TRUE )";


require "connect.php";

 if($results= mysqli_query($con, $sql))
{
 	echo "Election successfully set up";
 }

	
?>


