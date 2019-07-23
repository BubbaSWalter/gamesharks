<h1>Test Area</h1>
<?php
    $servername = "localhost";
    $username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";

    /*if (!in_array($uname, $meister_array)){
		header( 'Location: https://gamesharks.wizardsrwe.com/' );
	}*/
	$MainArray = array();
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}

	
	$sql = "SELECT * FROM voting";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			/*$MainArray[$row['Choice1']] = $MainArray[$row['Choice1']] + 1;
			$MainArray[$row['Choice2']] = $MainArray[$row['Choice2']] + 1;
			$MainArray[$row['Choice3']] = $MainArray[$row['Choice3']] + 1;*/
			
			//Choice 1 Processing
			$test = false;
			foreach($MainArray as $item){
				if($item['ChNum'] == $row['Choice1']){
					$test = true;
				}
			}
			if($test == true){
				$MainArray[$row['Choice1']]['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice1']] = array('ChNum' => $row['Choice1'],'Count' => 1);
			}

			//Choice 2 Processing
			$test = false;
			foreach($MainArray as $item){
				if($item['ChNum'] == $row['Choice2'])
				{
					$test = true;
				}
			}
			if($test == true){
				$MainArray[$row['Choice2']]['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice2']] = array('ChNum' => $row['Choice2'], 'Count' => 1);
			}

			
			//Choice 3 Processing
			$test = false;
			foreach($MainArray as $item){
				if($item['ChNum'] == $row['Choice3'])
				{
					$test = true;
				}
			}
			if($test == true){
				$MainArray[$row['Choice3']]['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice3']] = array('ChNum' => $row['Choice3'],'Count' => 1);
			}

		}
	}
	print_r($MainArray);

?>

<br>
<h2>Formatted Output</h2>
<?php
	echo 'Before <br>';
	foreach ($MainArray as $key => $value) {
		echo $value['ChNum'] . ' - ' . $value['Count'] . '<br>';
		
	}
	echo 'After <br>';
	$ChNum = array_column($MainArray,'ChNum');
	$Count = array_column($MainArray, 'Count');
	array_multisort($Count, SORT_DESC, $ChNum,SORT_ASC, $MainArray);
	foreach ($MainArray as $key => $value) {
		echo $value['ChNum'] . ' - ' . $value['Count'] . '<br>';
		
	}
?>