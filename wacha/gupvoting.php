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
    #$holder[$row['UserName']] = $math;

    $sql = "SELECT * FROM voting";
    $result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
            #print_r($row);
            $MainArray[$row['Choice1']] +=  1;
            $MainArray[$row['Choice2']] +=  1;
            $MainArray[$row['Choice3']] +=  1;
		}
    }
    $conn->close();
    arsort($MainArray);
    $truearray = [];
    foreach ($MainArray as $key => $value) {
        echo $key . " - " . $value . " Votes".  nl2br("\r\n");
    }
    
?>