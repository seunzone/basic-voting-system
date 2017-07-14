<?php
	
	function select_candidate()
	{

		$sql = "SELECT election_type FROM election";
		require "connect.php";
		$results = mysqli_query($con, $sql);

		if(mysqli_num_rows($results) > 0){
			foreach($results as $print)
			{
				 echo "<option value='{$print['election_type']}'>" . $print['election_type'] . "</option>" ."<br>";
			}
		}

	}

	function display_candidates($type)
	{
		$sql = "SELECT * FROM election WHERE Election_type = '{$type}'";
		require "connect.php";
		$results = mysqli_query($con, $sql);
		
		if(mysqli_num_rows($results) > 0){
			while($row=mysqli_fetch_assoc($results))
			{	
				 echo "<input type='hidden' name='election_type' value='{$type}'>";
				 echo "<input type='radio' name='candidate' value='{$row['candidate1']}'>" . 
				 		$row['candidate1']. "<br>";
				 echo "<input type='radio' name='candidate' value='{$row['candidate2']}'>" . 
				 		$row['candidate2']. "<br>";
				 echo "<input type='radio' name='candidate' value='{$row['candidate3']}'>" . 
				 		$row['candidate3']. "<br>";
				 echo "<input type='radio' name='candidate' value='{$row['candidate4']}'>" . 
				 		$row['candidate4']. "<br>";
			}
		}

	}
		
	//display_candidates("Assistant captain");
?>