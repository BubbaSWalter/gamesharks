<?php
	var $MainArray = array();
	while($x <= 100) {
		var $temparray = array(
			'ChNum' . $x => array(
				"chnum" => 'Challenge name' . $x,
				'count' => 0,
			),
		);
		array_push($MainArray, $temparray)
		$x++;
	} 
	print_r($MainArray);
?>