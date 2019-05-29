<?php
	date_default_timezone_set("America/Chicago");
	$shark_array = array();
	
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";

	
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	} 

	$Username = mysqli_real_escape_string($conn, $_POST['username']);
	$Choice = mysqli_real_escape_string($conn, $_POST['choice']);
	$Date = date("Y/m/d h:i:sa");

	$sql = "SELECT username FROM sharks ORDER BY username ASC";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			array_push($shark_array,$row["username"]);
		}
	} else {
		
	}
	$conn->close();
	//print_r($shark_array);
?>