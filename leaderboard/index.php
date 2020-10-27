


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
				<option value="2">Challenge 2: SNES - Pac-Man 2: The New Adventures Score Attack</option>
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
				<option value="Guppies">Main Community Group</option>
				<option value="Sharks">Sharks</option>
			</select>
			<button type="button" onclick="LoadChallenge()">Load Challenge</button>
		</form>
		

		<div id='container'>
		<div id='pc'>
			<h2 id=Chname>Insert Challenge Name Here</h2>
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
    				<td id='pc1name' class="tg-gri2"></td>
    				<td id='pc1score' class="tg-gri2"></td>
    				<td id='pc1point' class="tg-gri2"></td>
  				</tr>
				<tr>
					<td class="tg-hnm8">2nd</td>
					<td id='pc2name' class="tg-hnm8"></td>
					<td id='pc2score' class="tg-hnm8"></td>
					<td id='pc2point' class="tg-hnm8"></td>
  				</tr>
  				<tr>
		  			<td class="tg-4ffq">3rd</td>
					<td id='pc3name' class="tg-4ffq"></td>
					<td id='pc3score' class="tg-4ffq"></td>
					<td id='pc3point' class="tg-4ffq"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">4</td>
  					<td id='pc4name' class="tg-e454"></td>
  					<td id='pc4score' class="tg-e454"></td>
  					<td id='pc4point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">5</td>
  					<td id='pc5name' class="tg-eyx6"></td>
  					<td id='pc5score' class="tg-eyx6"></td>
  					<td id='pc5point' class="tg-eyx6"></td>
  				</tr> 				
  				<tr>
					<td class="tg-e454">6</td>
  					<td id='pc6name' class="tg-e454"></td>
  					<td id='pc6score' class="tg-e454"></td>
  					<td id='pc6point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">7</td>
  					<td id='pc7name' class="tg-eyx6"></td>
  					<td id='pc7score' class="tg-eyx6"></td>
  					<td id='pc7point' class="tg-eyx6"></td>
  				</tr>			
  				<tr>
					<td class="tg-e454">8</td>
  					<td id='pc8name' class="tg-e454"></td>
  					<td id='pc8score' class="tg-e454"></td>
  					<td id='pc8point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">9</td>
  					<td id='pc9name' class="tg-eyx6"></td>
  					<td id='pc9score' class="tg-eyx6"></td>
  					<td id='pc9point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">10</td>
  					<td id='pc10name' class="tg-e454"></td>
  					<td id='pc10score' class="tg-e454"></td>
  					<td id='pc10point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">11</td>
  					<td id='pc11name' class="tg-eyx6"></td>
  					<td id='pc11score' class="tg-eyx6"></td>
  					<td id='pc11point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">12</td>
  					<td id='pc12name' class="tg-e454"></td>
  					<td id='pc12score' class="tg-e454"></td>
  					<td id='pc12point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">13</td>
  					<td id='pc13name' class="tg-eyx6"></td>
  					<td id='pc13score' class="tg-eyx6"></td>
  					<td id='pc13point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">14</td>
  					<td id='pc14name' class="tg-e454"></td>
  					<td id='pc14score' class="tg-e454"></td>
  					<td id='pc14point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">15</td>
  					<td id='pc15name' class="tg-eyx6"></td>
  					<td id='pc15score' class="tg-eyx6"></td>
  					<td id='pc15point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">16</td>
  					<td id='pc16name' class="tg-e454"></td>
  					<td id='pc16score' class="tg-e454"></td>
  					<td id='pc16point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">17</td>
  					<td id='pc17name' class="tg-eyx6"></td>
  					<td id='pc17score' class="tg-eyx6"></td>
  					<td id='pc17point' class="tg-eyx6"></td>
  				</tr>
				<tr>
					<td class="tg-e454">18</td>
  					<td id='pc18name' class="tg-e454"></td>
  					<td id='pc18score' class="tg-e454"></td>
  					<td id='pc18point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">19</td>
  					<td id='pc19name' class="tg-eyx6"></td>
  					<td id='pc19score' class="tg-eyx6"></td>
  					<td id='pc19point' class="tg-eyx6"></td>
  				</tr>
				<tr>
					<td class="tg-e454">20</td>
  					<td id='pc20name' class="tg-e454"></td>
  					<td id='pc20score' class="tg-e454"></td>
  					<td id='pc20point' class="tg-e454"></td>
  				</tr>			
			</tbody>
		</table>
		</div>

		<div id='st'>
		<h2 id=Chname>Season Totals</h2>
		<table class="tg">
			<thead>
  				<tr>
		 			<th class="tg-cb0t">Place</th>
    				<th class="tg-cb0t">Username</th>
    				<th class="tg-cb0t">Total Points</th>
  				</tr>
			</thead>
			<tbody>
  				<tr>
		  			<td class="tg-gri2">1st</td>
    				<td id='st1name' class="tg-gri2"></td>
    				<td id='st1point' class="tg-gri2"></td>
  				</tr>
				<tr>
					<td class="tg-hnm8">2nd</td>
					<td id='st2name' class="tg-hnm8"></td>
					<td id='st2point' class="tg-hnm8"></td>
  				</tr>
  				<tr>
		  			<td class="tg-4ffq">3rd</td>
					<td id='st3name' class="tg-4ffq"></td>
					<td id='st3point' class="tg-4ffq"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">4</td>
  					<td id='st4name' class="tg-e454"></td>
  					<td id='st4point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">5</td>
  					<td id='st5name' class="tg-eyx6"></td>
  					<td id='st5point' class="tg-eyx6"></td>
  				</tr> 				
  				<tr>
					<td class="tg-e454">6</td>
  					<td id='st6name' class="tg-e454"></td>
  					<td id='st6point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">7</td>
  					<td id='st7name' class="tg-eyx6"></td>
  					<td id='st7point' class="tg-eyx6"></td>
  				</tr>			
  				<tr>
					<td class="tg-e454">8</td>
  					<td id='st8name' class="tg-e454"></td>
  					<td id='st8point' class="tg-e454"></td>
  				</tr>
  				<tr>
		  			<td class="tg-eyx6">9</td>
  					<td id='st9name' class="tg-eyx6"></td>
  					<td id='st9point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">10</td>
  					<td id='st10name' class="tg-e454"></td>
  					<td id='st10point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">11</td>
  					<td id='st11name' class="tg-eyx6"></td>
  					<td id='st11point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">12</td>
  					<td id='st12name' class="tg-e454"></td>
  					<td id='st12point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">13</td>
  					<td id='st13name' class="tg-eyx6"></td>
  					<td id='st13point' class="tg-eyx6"></td>
  				</tr>
  				<tr>
					<td class="tg-e454">14</td>
  					<td id='st14name' class="tg-e454"></td>
  					<td id='st14point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">15</td>
  					<td id='st15name' class="tg-eyx6"></td>
  					<td id='st15point' class="tg-eyx6"></td>
  				</tr>
				<tr>
					<td class="tg-e454">16</td>
  					<td id='st16name' class="tg-e454"></td>
  					<td id='st16point' class="tg-e454"></td>
  				</tr>
				<tr>
					<td class="tg-eyx6">17</td>
  					<td id='st17name' class="tg-eyx6"></td>
  					<td id='st17point' class="tg-eyx6"></td>
  				</tr>
				  <tr>
					<td class="tg-e454">18</td>
  					<td id='st18name' class="tg-e454"></td>
  					<td id='st18point' class="tg-e454"></td>
  				</tr>
				  <tr>
					<td class="tg-eyx6">19</td>
  					<td id='st19name' class="tg-eyx6"></td>
  					<td id='st19point' class="tg-eyx6"></td>
  				</tr>
				  <tr>
					<td class="tg-e454">20</td>
  					<td id='st20name' class="tg-e454"></td>
  					<td id='st20point' class="tg-e454"></td>
  				</tr>
			</tbody>
		</table>
			
		</div>
		</div>
		





	</article>
	
<?php include 'include/footer.php'?>
<script src="results.js"></script>
<script src="results-load.js"></script>
</body>
</html>