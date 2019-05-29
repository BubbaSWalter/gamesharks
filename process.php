<?php
    $uname = $_GET["username"];
    $check = false;
    
    $servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	} 

    $sql = "SELECT * FROM settings WHERE setting = 'shark'";
	$result = $conn->query($sql);
	//time,Username,Choice
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$check = $row["value"];
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	
	$shark_array = array("nintendocaprisun","faronheights","boodamedz","protonjon","thejewker","crazysunshine","dantheenigma","kuuribro","tallmanstan","khead161","smashtoons","myohel0","bubbaswalter");
	if($check == 'true'){
        if (in_array($uname, $shark_array))
        {
            echo "/shark/voting.php";
        } else {
            //echo "Hello " . $_GET["username"];
            echo "/AccessError.php";   
        }
	} else {
	    echo "/voting.php";
	}

	
?>