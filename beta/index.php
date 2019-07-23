<h1>Test Area</h1>
<?php
	$MainArray = array();
	array_push($MainArray,array("ChNum"=> 1, "Count"=>"12"),array("ChNum"=> 2, "Count"=>"12"),array("ChNum"=> 3, "Count"=>"42"));
	$x = 0;
	while($x <=100){
		array_push($MainArray,array("ChNum"=> $x, "Count"=>"12"));
		$x++;
	}
	/*var $MainArray = array();
	while($x <= 100) {
		var $temparray = array(
			'ChNum' . $x => array(
				"chnum" => 'Challenge name' . $x,
				'count' => 0,
			),
		);
		array_push($MainArray, $temparray)
		$x++;
	} */
	print_r($MainArray);
?>