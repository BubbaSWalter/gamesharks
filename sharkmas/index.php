<?php
    include '../meistercheck.php';
    include '../sharkcheck.php';
?>

<?php
	include 'uname.php';
	$check = 'true';
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Page</title>
	<link rel="stylesheet" type="text/css" href="/css/header.css">
	<link rel="stylesheet" type="text/css" href="/css/sharkmas.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
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
		<h1>GameSharks Validation Area</h1>
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
	<p>Hello, <?php echo $uname;?>:</p>
		<p>Welcome to the Game Sharks Sharkmas</p>
		<?php
		    if(isset($_COOKIE["username"])) {
                require 'userid.php';
                if($check == 'true'){
						echo '<p>Stage 1 of Sharkmas - Signing Up for Sharkmas</p>' ;
                    if (in_array($uname, $shark_array) || in_array($uname, $meister_array)){
				        echo '<p><a href="https://gamesharks.wizardsrwe.com/sharkmas/stage1/shark/">Click to Signup for Sharkmas</a></p>' ;
                    } else {
                        echo '<p><a href="https://gamesharks.wizardsrwe.com/sharkmas/stage1/guppy/">Click to Signup for Sharkmas</a></p>' ;
                    }
				}
                if($check == 'false'){
					echo '<p>Stage 2 of Sharkmas - Creating your gift for Sharkmas</p>' ;
					echo '<p><a href="https://gamesharks.wizardsrwe.com/sharkmas/stage2/">Click to find out who  your target is for Sharkmas</a></p>' ;
				} 
				if($check == 'closed'){
					echo '<p>Your a bit early.</p>';
					echo '<p>Please wait for the Announcement.</p>' ;
				}
			
		    }
		?>

		
		<?php
		    if(!isset($_COOKIE["username"])) {
		        echo '<input type="submit" onclick="location.href=\'login.html\'" value="Login">';
		    }
		?>
		
		<script type="text/javascript" src="/js/login.js"></script>
	</article>
	
<?php include 'include/footer.php'?>
</body>
</html>