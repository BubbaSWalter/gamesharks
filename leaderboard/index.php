


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
			<label for="challenge">Challenge Lookup: </label>
		
			<select id="challenge" name="challenge">
  				<option value="1">Challenge 1: SNES - TMNT: Turtles in Time - Distance</option>
				<option value="2">Challenge 2: SNES - Pac-Man 2: The New Adventures Score Ataack</option>
				<option value="3">Challenge 3:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="4">Challenge 4:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="5">Challenge 5:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="6">Challenge 6:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="7">Challenge 7:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="8">Challenge 8:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="9">Challenge 9:  &lt;REDACTED FOR SPOILERS&gt;</option>
				<option value="10">Challenge 10:  &lt;REDACTED FOR SPOILERS&gt;</option>
			</select>
			<br/>
			<label for="Group">Challenge Group: </label>
		
		<select id="Group" name="Group">
			<option value="Sharks">Main Community Group</option>
			<option value="Guppies">Sharks</option>
		</select>

		</form>
		<button type="button" onclick="LoadChallenge()">Load Challenge</button>
	</article>
	
<?php include 'include/footer.php'?>
<script src="results.js"></script>
</body>
</html>