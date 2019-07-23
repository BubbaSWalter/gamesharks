<h1>Test Area</h1>
<?php
	$MainArray = array();
	include '../mesitercheck.php';
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
				if($item['ChNum'] == $row['Choice1'])
				{
					$test = true;
				}
			}
			if($test == true){
				$MainArray['ChNum']['Count'] += 1;
			}else{
				$MainArray[$row['Choice1']] = array('ChNum' => $row['Choice1'], 1);
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
				$MainArray['ChNum']['Count'] += 1;
			}else{
				$MainArray[$row['Choice2']] = array('ChNum' => $row['Choice2'], 1);
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
				$MainArray['ChNum']['Count'] += 1;
			}else{
				$MainArray[$row['Choice3']] = array('ChNum' => $row['Choice3'], 1);
			}
		}
	}
	print_r($MainArray);
?>