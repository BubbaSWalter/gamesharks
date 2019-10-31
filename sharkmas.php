<?php
    include 'meistercheck.php';
    include 'sharkcheck.php';
?>

<?php
    $uname = "Guest";
	if(isset($_COOKIE["username"])) {
		$uname = $_COOKIE["username"];
		
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://id.twitch.tv/oauth2/validate",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Authorization: OAuth ". $uname 
			),
		));
		
		$resp = curl_exec($curl);
		$response = json_decode($resp, true);
		
		$uname = $response['login'];
		curl_close($curl);
		
		$check = false;
		
		$servername = "localhost";
		$username = "u919436859_admin";
		$password = "GjefadD~i63a";
		$dbname = "u919436859_shark";
		
		$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		$sql = "SELECT * FROM settings WHERE setting = 'shark'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$check = $row["value"];
			}
		}
		$conn->close();
		
		//$shark_array = array("nintendocaprisun","faronheights","boodamedz","protonjon","thejewker","crazysunshine","dantheenigma","kuuribro","tallmanstan","khead161","smashtoons","myohel0","bubbaswalter");
		
		$Admin_array = $meister_array;
	}
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Page</title>
	<link rel="stylesheet" type="text/css" href="/css/navbar.css">
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
	<img src="img/GameSharks_Sharkmas_logo.png" alt="GameSharks" height="200" class="center" style="object-fit: cover;">
		<h1>GameSharks Validation Area</h1>
	</div>
	<article id="article">
	<p>Hello, <?php echo $uname;?>:</p>
		<p>Welcome to the Game Sharks Sharkmas</p>
		<?php
		    if(isset($_COOKIE["username"])) {
                if($check == 'true'){
						echo '<p>Stage 1 of Sharkmas - Signing Up for Sharkmas</p>' ;
                    if (in_array($uname, $shark_array)){
				        echo '<p><a href="https://gamesharks.wizardsrwe.com/sharkmas/stage1/shark/">Click to Signup for Sharkmas</a></p>' ;
                    } else {
                        echo '<p><a href="https://gamesharks.wizardsrwe.com/sharkmas/stage1/guppy/">Click to Signup for Sharkmas</a></p>' ;
                    }
				}
                if($check == 'false'){
					echo '<p>Stage 2 of Sharkmas - Creating your gist for Sharkmas</p>' ;
					echo '<p><a href="https://gamesharks.wizardsrwe.com/sharkmas/stage2/">Click to Signup for Sharkmas</a></p>' ;
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