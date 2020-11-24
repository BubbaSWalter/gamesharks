<?php
	$choice = "No Choice Submitted";
	$uname = "Guest";
	if(isset($_COOKIE["username"])) {
		include '../uname.php';
		$servername = "localhost";
		$username = "u919436859_admin";
		$password = "GjefadD~i63a";
		$dbname = "u919436859_shark";
		
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM sharkmas WHERE userid = '$uid'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
			    $choice = $row["target"];
		    }
	    }
	    $conn->close();
	}else{
        header("Location: https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=p1bz1fklprq12zah2vz810xpqq33s4&redirect_uri=https://gamesharks.wizardsrwe.com/authy");
    }
?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Sharkmas Signup Conformation Page</title>
	<link rel="stylesheet" type="text/css" href="/css/navbar.css">
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/lists.css">
	<link rel="stylesheet" type="text/css" href="/css/sharkmas.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
<div class="snow">
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
  <div class="snow__flake"></div>
</div>

	<div id="Sharky" class="center">
	<img src="/img/GameSharks_Sharkmas_logo.png" alt="GameSharks" height="300" class="center" style="object-fit: cover;">
		<h1>GameSharks Sharkmas</h1>
		<h2>Sharkmas Target</h2>
	</div>
	<article id="article">
        <?php
		    if(isset($_COOKIE["username"])) {
				echo '<a href="/logout.html" class="myButton">Logout</a> ';
				echo '<a href="https://gamesharks.wizardsrwe.com/sharkmas/" class="SharkmasButton">Sharkmas Portal</a>';
		        if (in_array($uname, $Admin_array)){
					echo '<a href="/wacha/humble.php\" class="adminButton">Admin Menu</a>';
				}
				
		    }
		?>

        <?php
                include '../userid.php';
        ?>
		<p>Hello <span id="username"><?php echo $uname; ?></span>:</p>
		<p>Your Target for Sharkmas 2019 is <?php echo $choice;?>.  If you need help figuring out what your target wants you can always ask a challenge meister.</p>
		
	</article>
	<script type="text/javascript" src="js/confirm.js"></script>
</body>
</html>