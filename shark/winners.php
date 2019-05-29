<?php
    $servername = "localhost";
    $username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	            
    $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
    if ($conn->connect_error) {     // Check connection
	    die("Connection failed: " . $conn->connect_error);
	}
	$winners = array();
	$sql = "SELECT * FROM winner";
		        
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $winners = $row;
        }} else {
        echo "0 results";
    }
    $sql = "SELECT * FROM `Challenges` WHERE `ChallengeNum`='" . $winners['first'] . "' or `ChallengeNum`='" . $winners['second'] . "' or `ChallengeNum`='" . $winners['third'] . "' or `ChallengeNum`='" . $winners['fourth'] . "' or `ChallengeNum`='" . $winners['fifth'] . "'  ORDER BY ChallengeNum DESC";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo $row['Game'] . "<br>";
        }} else {
        echo "0 results";
    }
    $conn->close();
    
?>