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
	<p>Hello, <?php echo $uname;?>:</p>
		<p>Welcome to the Game Sharks Sharkmas</p>
		<p>Your a Bit Early</p>

		
		<?php
		    if(!isset($_COOKIE["username"])) {
		        echo '<input type="submit" onclick="location.href=\'login.html\'" value="Login">';
		    }
		?>
		<?php
		    if(isset($_COOKIE["username"])) {
		        echo '<input type="submit" onclick="location.href=\'logout.html\'" value="Logout">';
		        if (in_array($uname, $Admin_array)){
		            echo '<input type="submit" onclick="location.href=\'/wacha/humble.php\'" value="Admin Access">';
		        }
		    }
		?>
		<script type="text/javascript" src="/js/login.js"></script>
	</article>
	
<?php include 'include/footer.php'?>
</body>
</html>