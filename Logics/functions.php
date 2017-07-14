<?php
	
	function select_candidate()
	{

		$sql = "SELECT election_type FROM election";
		require "connect.php";
		$results = mysqli_query($con, $sql);

		if(mysqli_num_rows($results) > 0){
			foreach($results as $print)
			{
				 echo "<option value='{$print['election_type']}'>" . $print['election_type'] . "</option>";
			}
		}

	}

	// function display_candidates($type)
	// {
	// 	$sql = "SELECT * FROM election WHERE Election_type = '{$type}'";
	// 	require "connect.php";
	// 	$results = mysqli_query($con, $sql);
	// 	echo $sql;
		
	// 	if(mysqli_num_rows($results) > 0){
	// 		while($results)
	// 		{
	// 			 echo "<input type='radio' name='candidate' value='{$print['candidate1']}'>" . 
	// 			 		$results['candidate1']. "<br>";
	// 		}
	// 	}

	// }
		
	// display_candidates("Assistant captain");
?>