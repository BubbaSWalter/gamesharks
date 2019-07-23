<h1>Test Area</h1>
<?php
	$MainArray = array();
	array_push($MainArray,array("ChNum"=> 1, "Count"=>"12"),array("ChNum"=> 2, "Count"=>"12"),array("ChNum"=> 3, "Count"=>"42"));
	$x = 1;
	$test = false;
	while($x < 4){
		foreach($MainArray as $item){
			if($item['ChNum'] == $x  && $test == false){
				$MainArray[$x]['Count'] += 1; 
				echo 'Challenge#' . $item['ChNum'] ." - Count" . $item['Count']. '<br>';
				$test = true;
			}
		}$x++;
		/*if($test == false){
			array_push($MainArray,array("ChNum"=> $x, "Count"=>"12"));
		}*/
		$test = false;
	}
	foreach($MainArray as $item){
		echo 'Challenge#' . $item['ChNum'] ." - Count" . $item['Count']. '<br>';
	}
	print_r($MainArray);
?>