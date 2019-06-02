<?php
    if(!isset($_COOKIE["username"])) {
        header( 'Location: https://gamesharks.wizardsrwe.com/' );
    }
?>
<?php
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
	}
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Page</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/lists.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
        <div id="Sharky" class="center">
	        <img src="img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		    <h1>GameSharks Offical Ballot</h1>
	    </div>
	    <article id="article">
		    <p>You are allowed to vote once.  If you want to change your vote please ping BubbaSWalter on Discord. Multiple votes could result in votes being voided</p>
		    <script type="text/javascript" src="js/login.js"></script>
			<form action="upload.php" method="get">
  				First name: <input type="text" name="fname"><br>
  				Last name: <input type="text" name="lname"><br>
  				<input type="submit" value="Submit">
			</form>
		
		
		</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>