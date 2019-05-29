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
		    <h1>GameSharks Offical Shark Ballot</h1>
		    <h1>Shark Only</h1>
	    </div>
	    <article id="article">
		    <p>You are allowed to vote once.  If you want to change your vote please ping BubbaSWalter on Discord. Multiple votes could result in votes being voided</p>
		    <input id="login" type="button" onclick="location.href='login.html';" value="Login">
		    <script type="text/javascript" src="js/login.js"></script>
		    <form>
			    Person Voting:<span id="username">Guest</span><br>
			    Pick Your Poison:<br>
			    <button type="button" onclick="list()" >Show/Hide The List</button>
			    <div id="list">
				<ul>
				<?php include 'include/lilist.php'?>
				</ul>
			</div>
			<br>
			<select name="choice" id="choice">
				<?php include 'include/ddlist.php'?>
			</select>
			<br>
			<input id="submit" type="button" onclick="vote()" value="Submit">
			
		</form>
		
		
	</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/vote.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>