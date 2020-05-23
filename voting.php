<?php
    if(!isset($_COOKIE["username"])) {
        header( 'Location: https://gamesharks.wizardsrwe.com/' );
    }
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

		include 'sharkcheck.php';

		if (in_array($uname, $shark_array)){
			header( 'Location: https://gamesharks.wizardsrwe.com/AccessError.php' );
		}
	}
?>
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>GameSharks Voting Page</title>
	<link rel="stylesheet" type="text/css" href="css/navbar.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>
    <canvas id='bgCanvas'></canvas>
        <div id="Sharky" class="center">
	        <img src="img/GameSharks_logo_square.png" alt="GameSharks"  width="369" height="200" class="center">
		    <h1>GameSharks Offical Ballot</h1>
	    </div>
	    <article id="article">
		    <p>You are allowed to vote once.  If you want to change your vote please ping BubbaSWalter on Discord. Multiple votes could result in votes being voided</p>
		    <script type="text/javascript" src="js/login.js"></script>
			<form action="upload.php" method="get">
				<input type="hidden" name="username" value="<?php echo $uname; ?>">	
				Person Voting:<span id="username"><?php echo $uname; ?></span><br>

				
				<?php
				    $servername = "localhost";
	                $username = "u919436859_admin";
	                $password = "GjefadD~i63a";
					$dbname = "u919436859_shark";
					$Choice1 ="";
					$Choice2 ="";
					$Choice3 ="";
	                $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	                if ($conn->connect_error) {     // Check connection
		                die("Connection failed: " . $conn->connect_error);
	                } 

	                $sql = "SELECT * FROM voting WHERE Username = '$uname'";
	                $result = $conn->query($sql);
	                //time,Username,Choice
	                if ($result->num_rows > 0) {
		            // output data of each row
		                while($row = $result->fetch_assoc()) {
							
							echo "<br><span> Current Choices:<br>" ."Choice A: Challenge#  " . $row["Choice1"] ."<br>" ."Choice B: Challenge#  " . $row["Choice2"] ."<br>" . "Choice C: Challenge#  " . $row["Choice3"] ."</span><br>";
							$Choice1 = $row["Choice1"];
							$Choice2 = $row["Choice2"];
							$Choice3 = $row["Choice3"];
							
		                }
	                } else {
						echo "<br><span> Current Choices: NONE </span><br>";
						echo "</br>";
	                }
	                $conn->close();
	                $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	                if ($conn->connect_error) {     // Check connection
		            	die("Connection failed: " . $conn->connect_error);
	                }
	                $sql = "SELECT * FROM Challenges";
	                $result = $conn->query($sql);
	                
	                if ($result->num_rows > 0) {
		            	// output data of each row
		            	while($row = $result->fetch_assoc()) {
							echo "<h3>Challenge #" . $row["ChallengeNum"] . "</h3>";
							echo "<ul>";
							echo "   <li>" . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "</li>";
							echo "</ul>";
							echo "<h4>     Challenge Description </h4>";
							echo "<ul>";
							echo "   <li>" . $row["Description"] . "</li>";
							echo "</ul>";
							$cnum = str_replace("'", "&apos;", $row["ChallengeNum"]);
							$game = str_replace("'", "&apos;", $row["Game"]);
							$console = str_replace("'", "&apos;", $row["Console"]);
							$type = str_replace("'", "&apos;", $row["Type"]);
							$holder = $cnum . " - " . $game ." - " . $console . " - " . $type;

                            if($_GET['vote1'] == $holder){
								echo 'Choice A:	<input type="radio" name="vote1" align="center" value="' . $holder . '" checked></br>';
							} else if( substr($Choice1 , 0,2 ) == substr($holder , 0,2 ) ){
								echo 'Choice A:	<input type="radio" name="vote1" align="center" value="' . $holder . '" checked></br>';
							}else{
								echo 'Choice A:	<input type="radio" name="vote1" align="center" value="' . $holder . '"></br>';
							}
							
							
							if($_GET['vote2'] == $holder){
								echo 'Choice B:	<input type="radio" name="vote2" align="center" value="' . $holder . '" checked></br>';
							} else if( substr ($Choice2 , 0,2 ) == substr($holder , 0,2 ) ){
								echo 'Choice B:	<input type="radio" name="vote2" align="center" value="' . $holder . '" checked></br>';
							} else{
								echo 'Choice B:	<input type="radio" name="vote2" align="center" value="' . $holder . '"></br>';
							}
							
							
							if($_GET['vote3'] == $holder){
								echo 'Choice C:	<input type="radio" name="vote3" align="center" value="' . $holder . '" checked></br>';
							} else if( substr ($Choice3 , 0,2 ) == substr($holder , 0,2 ) ){
								echo 'Choice C:	<input type="radio" name="vote3" align="center" value="' . $holder . '" checked></br>';
							} else{
								echo 'Choice C:	<input type="radio" name="vote3" align="center" value="' . $holder . '"></br>';
							}
							echo '</br>';
						}

					}
	                
				?>

			<input type="submit" value="Vote">
			</form>
		
		
		</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>