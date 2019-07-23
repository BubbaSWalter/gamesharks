<h1>Test Area</h1>
<?php
    $servername = "localhost";
    $username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";


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
					echo 'Choice 1 Exsit';
					$test = true;
				}
			}
			if($test == true){
				$MainArray['ChNum']['Count'] += 1;
			}elseif($test == false)	{
				$MainArray[$row['Choice1']] = array('ChNum' => $row['Choice1'], 1);
			}

		}
	}
	print_r($MainArray);

?>