


<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Season 5 Leaderboard</title>
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="table.css">
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
		

		<table class="tg">
			<thead>
  				<tr>
		 			<th class="tg-cb0t">Place</th>
    				<th class="tg-cb0t">Username</th>
    				<th class="tg-cb0t">Score</th>
    				<th class="tg-cb0t">Points Awarded</th>
  				</tr>
			</thead>
			<tbody>
  				<tr>
		  			<td class="tg-gri2">1st</td>
    				<td id='1name' class="tg-gri2"></td>
    				<td id='1score' class="tg-gri2"></td>
    				<td id='1point' class="tg-gri2"></td>
  				</tr>
				<tr>
					<td class="tg-hnm8">2nd</td>
					<td id='2name' class="tg-hnm8"></td>
					<td id='2score' class="tg-hnm8"></td>
					<td id='2point' class="tg-hnm8"></td>
  				</tr>
  				<tr>
		  			<td class="tg-4ffq">3rd</td>
					<td id='3name' class="tg-4ffq"></td>
					<td id='3score' class="tg-4ffq"></td>
					<td id='3point' class="tg-4ffq"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">4</td>
  					<td id='4name' class="tg-e454"></td>
  					<td id='4score' class="tg-e454"></td>
  					<td id='4point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">5</td>
  					<td id='5name' class="tg-eyx6"></td>
  					<td id='5score' class="tg-eyx6"></td>
  					<td id='5point' class="tg-eyx6"></td>
  				</tr> 				
  				<tr>
					<td class="tg-e454">6</td>
  					<td id='6name' class="tg-e454"></td>
  					<td id='6score' class="tg-e454"></td>
  					<td id='6point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">7</td>
  					<td id='7name' class="tg-eyx6"></td>
  					<td id='7score' class="tg-eyx6"></td>
  					<td id='7point' class="tg-eyx6"></td>
  				</tr>			
  				<tr>
					<td class="tg-e454">8</td>
  					<td id='8name' class="tg-e454"></td>
  					<td id='8score' class="tg-e454"></td>
  					<td id='8point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">9</td>
  					<td id='9name' class="tg-eyx6"></td>
  					<td id='9score' class="tg-eyx6"></td>
  					<td id='9point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">10</td>
  					<td id='10name' class="tg-e454"></td>
  					<td id='10score' class="tg-e454"></td>
  					<td id='10point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6"">11</td>
  					<td id='11name' class="tg-eyx6"></td>
  					<td id='11score' class="tg-eyx6"></td>
  					<td id='11point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">12</td>
  					<td id='12name' class="tg-e454"></td>
  					<td id='12score' class="tg-e454"></td>
  					<td id='12point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6"">13</td>
  					<td id='13name' class="tg-eyx6"></td>
  					<td id='13score' class="tg-eyx6"></td>
  					<td id='13point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">14</td>
  					<td id='14name' class="tg-e454"></td>
  					<td id='14score' class="tg-e454"></td>
  					<td id='14point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6"">15</td>
  					<td id='15name' class="tg-eyx6"></td>
  					<td id='15score' class="tg-eyx6"></td>
  					<td id='15point' class="tg-eyx6"></td>
  				</tr>
				
			</tbody>
		</table>





	</article>
	
<?php include 'include/footer.php'?>
<script src="results.js"></script>
</body>
</html>