


<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Season 5 Leaderboard</title>
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/iframe.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
	<div id="Sharky" class="center">
	<img src="../img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		<h1>GameSharks Season 5 Leaderboard</h1>
	</div>
	<article id="article">
		<form action="index.php"">
			<label for="cars">Challenge1:</label>
		
			<select id="" name="challenge">
  				<option value="Challenge 1">Challenge 1:  TMNT: Turtles in Time Distance</option>
			</select>
		</form>
		<button type="button" onclick="LoadChallenge()">Load Challenge</button>
	</article>
	
<?php include 'include/footer.php'?>
<script src="results.js"></script>
</body>
</html>