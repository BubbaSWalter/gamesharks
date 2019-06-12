<?php
  $choice = "No Choice Submitted";
    $uname = "Guest";
	
	if(isset($_COOKIE["username"])) {
		$uname = $_COOKIE["username"];
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://id.twitch.tv/oauth2/validate",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Authorization: OAuth ". $uname 
			),
		));
		
		$resp = curl_exec($curl);
		$response = json_decode($resp, true);
		
		$uname = $response['login'];
		curl_close($curl);
		
		$servername = "localhost";
		$username = "u919436859_admin";
		$password = "GjefadD~i63a";
		$dbname = "u919436859_shark";
		
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM voting WHERE Username = '$uname'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
				$choice1 = $row["Choice1"];
				$choice2 = $row["Choice2"];
				$choice3 = $row["Choice3"];
		    }
	    }
	    $conn->close();
		
	}
?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Conformation Page</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/lists.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
	<div id="Sharky" class="center">
	<img src="img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		<h1>GameSharks Conformation Page</h1>
	</div>
	<article id="article">
		<p>Hello <span id="username"><?php echo $uname;?></span>:</p>
		<p>We have your votes as:<br>
				Vote Choice 1: <?php echo $choice1;?><br>
				Vote Choice 2: <?php echo $choice2;?><br>
				Vote Choice 3: <?php echo $choice3;?><br>
		</p>
		
	</article>
	<script type="text/javascript" src="js/ocean.js"></script>
</body>
</html>