<?php 
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
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$check = $row["value"];
			}
		}
		$conn->close();
		
		$shark_array = array("nintendocaprisun","faronheights","boodamedz","protonjon","thejewker","crazysunshine","dantheenigma","kuuribro","tallmanstan","khead161","smashtoons","myohel0","bubbaswalter");
		
		if($check == 'true'){
			if (in_array($uname, $shark_array))
			{
				header( 'Location: https://gamesharks.wizardsrwe.com/Beta/shark/voting.php' );
			} else {
				header( 'Location: https://gamesharks.wizardsrwe.com/Beta/AccessError.php' );
			}
		} else {
			header( 'Location: https://gamesharks.wizardsrwe.com/Beta/voting.php' );
		}
	}
?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Page</title>
	<link rel="stylesheet" type="text/css" href="/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
	<div id="Sharky" class="center">
	<img src="img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		<h1>GameSharks Validation Area</h1>
	</div>
	<article id="article">
		<p>Welcome to the Game Sharks Voting Pool</p>
		<p>Click Login to start.  You will need a twitch account to vote</p>
		<p>Sharks and Guppies are allowed one vote.  Challenge Meisters do not vote as the Challenge Meisters are the tie breakers.</p>
		<input id="login" type="submit" onclick="location.href='login.html';" value="Login">
		<script type="text/javascript" src="/js/login.js"></script>
		<script type="text/javascript" src="/js/ocean.js"></script>
	</article>
	
<?php include 'include/footer.php'?>
</body>
</html>