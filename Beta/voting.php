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
			                echo "<span> Current Choice:" . $row["Choice"]. "</span><br>";
		                }
	                } else {
		                echo "<span> Current Choice: NONE </span><br>";
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
					<select name="choice" id="choice">
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
            	    	        echo "<option value='#" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "'>Challenge #" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "</option>";
            	        	}
            	    	}
            		?>
					</select>
				<br>
			<input type="submit" value="Vote">
			</form>
		
		
		</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>