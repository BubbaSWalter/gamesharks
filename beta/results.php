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
	$sql = "SELECT * FROM testvoting";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
            echo $row['Choice1'] . '<br>';
            echo $row['Choice2'] . '<br>';
            echo $row['Choice3'] . '<br>';
		}
    }
    

?>