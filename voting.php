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
	<link rel="stylesheet" type="text/css" href="../css/lists.css">
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
							
			                echo "<br><span> Current Choices:<br>" . $row["Choice1"] ."<br>" . $row["Choice2"] ."<br>". $row["Choice3"] ."<br>";
		                }
	                } else {
		                echo "<br><span> Current Choice: NONE </span><br>";
	                }
	                $conn->close();
				?>
					Pick Your Poison:<br>
					<button type="button" onclick="list()">Show/Hide The List</button>
					<div id="list">
						<ul>
						<?php
				    		$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	                		if ($conn->connect_error) {     // Check connection
		            	    	die("Connection failed: " . $conn->connect_error);
	                		}
	                		$sql = "SELECT * FROM Challenges";
	                		$result = $conn->query($sql);
	                		if ($result->num_rows > 0) {
		            		// output data of each row
		            	    	while($row = $result->fetch_assoc()) {
			        	        	echo "<li><p>Challenge #" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"]. "</p>";
			        	        	echo "<p>". $row["Description"] . "</p>";
			        	        	if(!is_null ( $row["SaveState"] )){
			        	        	    echo "<p>" . $row["SaveState"] . "</p>" ;
			        	        	}
			        	        	echo "</li>";
		            	    	}
	                		}
							?>
						</ul>
					</div>
					<br>
					<table>
						<caption>Pick three choices but you can only chose one challege once</caption>
						<caption><strong><?php echo $_GET['error'];?></strong></caption>
  						<tr>
						  	<th>Chanllenge</th>
    						<th>Vote 1</th>
    						<th>Vote 2</th> 
    						<th>Vote 3</th>
  						</tr>
  						<?php
							$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
							if ($conn->connect_error) {     // Check connection
								die("Connection failed: " . $conn->connect_error);
					
							}
							$sql = "SELECT * FROM Challenges";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while($row = $result->fetch_assoc()) {
									$cnum = str_replace("'", "&apos;", $row["ChallengeNum"]);
									$game = str_replace("'", "&apos;", $row["Game"]);
									$console = str_replace("'", "&apos;", $row["Console"]);
									$type = str_replace("'", "&apos;", $row["Type"]);
									$holder = $cnum . " - " . $game ." - " . $console . " - " . $type;
									echo '	<tr>';
									echo '		<td> Challenge#'  . $holder . '</td>';
									if($_GET['vote1'] == $holder){
										echo '		<td><input type="radio" name="vote1" align="center" value="' . $holder . '" checked></td>';
									} else{
										echo '		<td><input type="radio" name="vote1" align="center" value="' . $holder . '"></td>';
									}
									if($_GET['vote2'] == $holder){
										echo '		<td><input type="radio" name="vote2" align="center" value="' . $holder . '" checked></td>';
									} else{
										echo '		<td><input type="radio" name="vote2" align="center" value="' . $holder . '"></td>';
									}
									if($_GET['vote3'] == $holder){
										echo '		<td><input type="radio" name="vote3" align="center" value="' . $holder . '" checked></td>';
									} else{
										echo '		<td><input type="radio" name="vote3" align="center" value="' . $holder . '"></td>';
									}
									echo '	</tr>';

								}
							}
						?>
					</table>
				<br>
			<input type="submit" value="Vote">
			</form>
		
		
		</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>