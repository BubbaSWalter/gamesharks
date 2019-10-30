<?php
	include '../sharkcheck.php';
	include '../meistercheck.php';
?>

<?php 
	if(isset($_COOKIE["username"])) {
		include '../uname.php';
		include '../sharkcheck.php';
		$check = false;
		
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
		
		//$shark_array = array("boodamedz","crazy_sunshine","dantheenigma","faronheights","heisanevilgenius","khead161","kuuribro","mastertimethief","myohel0", "megagwolf","nintendocaprisun","protonjon","smashtoons","tallmanstan","thejewker","bubbaswalter");
		
		if (!in_array($uname, $shark_array) and !in_array($uname, $meister_array)){
			header( 'Location: https://gamesharks.wizardsrwe.com/AccessError.php' );
		}
	} else {
		header( 'Location: https://gamesharks.wizardsrwe.com/' );
	}
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Page</title>
	<link rel="stylesheet" type="text/css" href="/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/lists.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    
    <canvas id='bgCanvas'></canvas>
        <div id="Sharky" class="center">
	        <img src="/img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		    <h1>GameSharks Sharkmas</h1>
		    <h1>Stage1 - Signup</h1>
	    </div>
	    <article id="article">
		    Person Signing up:<span id="username"><?php echo $uname; ?></span><br>
			<form action="upload.php">
				<input type="hidden" name="username" value="<?php echo $uname; ?>">
  				<input type="submit" value="Vote">
			</form>
		
		
	</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/vote.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>