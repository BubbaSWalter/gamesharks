


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
			<button type="button" onclick="LoadChallenge()">Load Challenge</button>
		</form>
		
		<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 5px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 5px;word-break:normal;}
.tg .tg-cb0t{background-color:#ea9999;border-color:inherit;text-align:left;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
<table class="tg">
<thead>
  <tr>
    <th class="tg-cb0t" colspan="4">Challenge 1</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-cb0t">User Name</td>
    <td class="tg-cb0t">Score</td>
    <td class="tg-cb0t">Points Awarderd</td>
  </tr>
  <tr>
    <td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
  <tr>
  	<td id='1name' class="tg-0pky"></td>
    <td id='1score' class="tg-0pky"></td>
    <td id='1points'class="tg-0pky"></td>
  </tr>
</tbody>
</table>





	</article>
	
<?php include 'include/footer.php'?>
<script src="results.js"></script>
</body>
</html>