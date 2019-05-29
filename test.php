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
		<script type="text/javascript" src="/js/test.js"></script>
		<script type="text/javascript" src="/js/ocean.js"></script>
	</article>
	
<?php include 'include/footer.php'?>
</body>
</html>