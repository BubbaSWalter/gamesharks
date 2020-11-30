<?php
date_default_timezone_set("America/Chicago");
$error = '';
$servername = "localhost";
$username = "u919436859_admin";
$password = "GjefadD~i63a";
$dbname = "u919436859_shark";

$Date = date("Y/m/d h:i:sa");
$class = 'Guppy';
require '../../uname.php';

require '../../../sharkcheck.php';
require '../../../meistercheck.php';
if (in_array($uname, $shark_array)){
    $class = 'Shark-Meister';
}
if (in_array($uname, $meister_array)){
    $class = 'Shark-Meister';
}
$sql = "INSERT INTO `sharkmas`(`dt`, `userid`, `username`,  `class`, `target`) VALUES ('$Date','$uid','$uname','$class','NULL')ON DUPLICATE KEY UPDATE dt='$Date'";
//$sql = "INSERT INTO sharkmas (`dt`, `userid` , `username` , `class` , `target`)  VALUES ('$Date','$UserID', 'NULL', '$class', NULL) ";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 


if ($conn->query($sql) === TRUE) {
    $error = 'No Errors Detected';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    $error = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
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
		<h1>GameSharks Sharkmas Signup Conformation Page</h1>
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
                include '../../userid.php';
            ?>
		<p>Hello <span id="username"><?php echo $uname; ?></span>:</p>
		<p>We have you signed up as a <?php echo $class;?>.</p>
        <?php 
            if(strlen($error) > 10){
                echo "<p id='errorlist'>";
                echo $error;
                echo "</p>";
            }
        ?>

		
	</article>
	<script type="text/javascript" src="js/confirm.js"></script>
</body>
</html>