<?php
	$choice = "No Choice Submitted";
	$uname = "Guest";
	if(isset($_COOKIE["username"])) {
		include 'uname.php';
		$servername = "localhost";
		$username = "u919436859_admin";
		$password = "GjefadD~i63a";
		$dbname = "u919436859_shark";
		
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM sharkmas WHERE Username = '$uname'";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
			    $choice = $row["target"];
		    }
	    }
	    $conn->close();
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
	<div id="Sharky" class="center">
	<img src="/img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		<h1>GameSharks Sharkmas</h1>
		<h2>Sharkmas Target</h2>
	</div>
	<article id="article">
		<?php
		    if(isset($_COOKIE["username"])) {
		        echo '<input type="submit" onclick="location.href=\'logout.html\'" value="Logout">';
		    }
		?>
		<p>Hello <span id="username"><?php echo $uname; ?></span>:</p>
		<p>Your Target for Sharkmas 2019 is <?php echo $choice;?>.  Need help figuring out what your target wants ask meister </p>
		
	</article>
	<script type="text/javascript" src="js/confirm.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
</body>
</html>