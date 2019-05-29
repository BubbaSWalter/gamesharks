<?php
	date_default_timezone_set("America/Chicago");
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";

	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	} 
	//$_POST['username']
	$Username = mysqli_real_escape_string($conn, $_POST['username']);

	$sql = "SELECT * FROM sharkvoting WHERE Username = '$Username'";
	$result = $conn->query($sql);
	//time,Username,Choice
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo $row["Choice"];
		}
	} else {
		echo "0 results";
	}
	$conn->close();
	?>