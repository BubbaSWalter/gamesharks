<?php
    $challengenum = $_GET["choice"];
    $sql = "DELETE FROM Challenges WHERE ChallengeNum='" . $challengenum . "'";
    
    $servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}
	
	$result = $conn->query($sql);
	
	header("Location: https://gamesharks.wizardsrwe.com/wacha/challenges.php");
?>