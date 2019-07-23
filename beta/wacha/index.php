<h1>Test Area</h1>
<?php
	$MainArray = array();
	include '../mesitercheck.php';
	$MainArray = array();
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT COUNT(*) AS `num` FROM voting";
	$result = $conn->query($sql);
	//time,Username,Choice
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<h5>Total Votes: " . $row["num"] . "</h5>";
		}
	}
	$sql = "SELECT * FROM voting";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
						// output data of each row
		while($row = $result->fetch_assoc()) {
			echo($row['Choice1']) . 'Should be here';
			/*$MainArray[$row['Choice1']] = $MainArray[$row['Choice1']] + 1;
			$MainArray[$row['Choice2']] = $MainArray[$row['Choice2']] + 1;
			$MainArray[$row['Choice3']] = $MainArray[$row['Choice3']] + 1;*/
			
			//Choice 1 Processing
			$test = false;
			foreach($MainArray as $item){
				if($item['ChNum'] == $row['Choice1'])
				{
					echo 'Choice 1 Exsit';
					$test = true;
				}
			}
			if($test == true){
				$MainArray['ChNum']['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice1']] = array('ChNum' => $row['Choice1'], 1);
			}

			//Choice 2 Processing
			$test = false;
			foreach($MainArray as $item){
				if($item['ChNum'] == $row['Choice2'])
				{
					echo 'Choice 2 Exsit';
					$test = true;
				}
			}
			if($test == true){
				$MainArray['ChNum']['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice2']] = array('ChNum' => $row['Choice2'], 1);
			}
			
			//Choice 3 Processing
			$test = false;
			foreach($MainArray as $item){
				if($item['ChNum'] == $row['Choice3'])
				{
					echo 'Choice 3 Exisit';
					$test = true;
				}
			}
			if($test == true){
				$MainArray['ChNum']['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice3']] = array('ChNum' => $row['Choice3'], 1);
			}
		}
	}
	print_r($MainArray);
?>