<?php
    $uname = $_GET["sharks"];
    $sql = "DELETE FROM sharks WHERE username= '" . $uname . "'";
    
    $servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
        echo $result->num_rows;
	}
	
	header("Location: https://gamesharks.wizardsrwe.com/wacha/user.php");
	
?>