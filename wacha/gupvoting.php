<?php
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
    $MainArray = [];
    

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
    
    $sql = "SELECT * AS `num` FROM voting";
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
            $MainArray[$Row['Choice1']] +=  1;
            $MainArray[$Row['Choice2']] +=  1;
            $MainArray[$Row['Choice3']] +=  1;
		}
    }
    echo(json_encode($trueholder));
    
?>