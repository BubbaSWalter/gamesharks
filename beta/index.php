<h1>Test Area</h1>
<?php
	$MainArray = array();
	array_push($MainArray,array("ChNum"=> 1, "Count"=>"12"),array("ChNum"=> 2, "Count"=>"12"),array("ChNum"=> 3, "Count"=>"42"));
	$x = 1;
	$test = false;
	while($x <=100){
		foreach($MainArray as $item){
			if($item['ChNum'] == $x){
				$item['Count'] = $item['Count'] +1;
			}
		}
		if($test == false){
			array_push($MainArray,array("ChNum"=> $x, "Count"=>"12"));
		}
		
		$x++;
	}
	foreach($MainArray as $item){
		echo 'Challenge#' . $item['ChNum'] ." - Count" . $item['Count']. '<br>';
	}
?>