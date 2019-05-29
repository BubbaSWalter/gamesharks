<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Results Page</title>
	<link rel="stylesheet" type="text/css" href="../css/navbar.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/lists.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
	<div id="Sharky" class="center">
	<img src="../img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		<h1>GameSharks Results</h1>
	</div>
	<article id="article">
	    <p>Community Results</p>
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

			$Username = mysqli_real_escape_string($conn, $_POST['username']);
			$Choice = mysqli_real_escape_string($conn, $_POST['choice']);
			$Date = date("Y/m/d h:i:sa");

			$sql = "SELECT `Choice`, COUNT(*) AS `num` FROM voting GROUP BY `Choice`ORDER BY num DESC";
			$result = $conn->query($sql);
			//time,Username,Choice
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p class='stuff'>Challenge: " . $row["Choice"] . " - Count: " . $row["num"] . "</p>";
				}
			} else {
			echo "0 results";
			}
			$conn->close();
			?>
			<p>Shark Response</p>
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

			$Username = mysqli_real_escape_string($conn, $_POST['username']);
			$Choice = mysqli_real_escape_string($conn, $_POST['choice']);
			$Date = date("Y/m/d h:i:sa");

			$sql = "SELECT `Choice`, COUNT(*) AS `num` FROM sharkvoting GROUP BY `Choice`ORDER BY num DESC";
			$result = $conn->query($sql);
			//time,Username,Choice
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p class='stuff'>Challenge: " . $row["Choice"] . " - Count: " . $row["num"] . "</p>";
				}
			} else {
			echo "0 results";
			}
			$conn->close();
			?>
	</article>
	<script type="text/javascript" src="../js/ocean.js"></script>
</body>
</html>