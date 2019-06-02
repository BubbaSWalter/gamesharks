<?php
    include '../sharkcheck.php';
?>

<?php 
	if(isset($_COOKIE["username"])) {
		include '../uname.php';
		include '../sharkcheck.php';
		$check = false;
		
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
		
		//$shark_array = array("boodamedz","crazy_sunshine","dantheenigma","faronheights","heisanevilgenius","khead161","kuuribro","mastertimethief","myohel0", "megagwolf","nintendocaprisun","protonjon","smashtoons","tallmanstan","thejewker","bubbaswalter");
		
		if (!in_array($uname, $shark_array)){
			header( 'Location: https://gamesharks.wizardsrwe.com/AccessError.php' );
		}
	} else {
			header( 'Location: https://gamesharks.wizardsrwe.com/' );
	}
?>
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
		    
		    <form action="upload.php" method="get">
				Person Voting:<span id="username">Guest</span><br>
				<input type="hidden" name="username" value="<?php echo $uname; ?>"><br>
				Pick Your Poison:<br>
				<button type="button" onclick="list()" >Show/Hide The List</button>
				<div id="list">
					<ul>
						<?php
                    		$conn = new mysqli($servername, $username, $password, $dbname);
                    		if ($conn->connect_error) {     // Check connection
	                    		die("Connection failed: " . $conn->connect_error);
	                		}
	                		$winners = array();
	                		$sql = "SELECT * FROM winner";
	                		$result = $conn->query($sql);
	                		if ($result->num_rows > 0) {
                        		// output data of each row
                        		while($row = $result->fetch_assoc()) {
                            		$winners = $row;
                        		}} else {
                            		echo "0 results";
                        		}
                    		$sql = "SELECT * FROM `Challenges` WHERE `ChallengeNum`='" . $winners['first'] . "' or `ChallengeNum`='" . $winners['second'] . "' or `ChallengeNum`='" . $winners['third'] . "' or `ChallengeNum`='" . $winners['fourth'] . "' or `ChallengeNum`='" . $winners['fifth'] . "'  ORDER BY ChallengeNum ASC";
                    		$result = $conn->query($sql);
                    		if ($result->num_rows > 0) {
                        		while($row = $result->fetch_assoc()) {
                            		echo "<li><p>Challenge #" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"]. "</p>";
			                		echo "<p>". $row["Description"] . "</p>";
			                		if(!is_null ( $row["SaveState"] )){
			                		    echo "<p>" . $row["SaveState"] . "</p>" ;
			                		}
			                		echo "</li>";
                    		}} else {
                        		echo "0 results";
                    		}
                    		$conn->close();
						?>
					</ul>
				</div>

				<br>
				<select name="choice" id="choice">
					<?php
						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {     // Check connection
							die("Connection failed: " . $conn->connect_error);
						}

						$winners = array();
	                	$sql = "SELECT * FROM winner";
	                	$result = $conn->query($sql);
	                	if ($result->num_rows > 0) {
                        	// output data of each row
                        	while($row = $result->fetch_assoc()) {
                            	$winners = $row;
                        }} else {
                        	echo "0 results";
                        }
                    	$sql = "SELECT * FROM `Challenges` WHERE `ChallengeNum`='" . $winners['first'] . "' or `ChallengeNum`='" . $winners['second'] . "' or `ChallengeNum`='" . $winners['third'] . "' or `ChallengeNum`='" . $winners['fourth'] . "' or `ChallengeNum`='" . $winners['fifth'] . "'  ORDER BY ChallengeNum ASC";
                    	$result = $conn->query($sql);
                    	if ($result->num_rows > 0) {
                        	while($row = $result->fetch_assoc()) {
                            	echo "<option value='#" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "'>Challenge #" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "</option>";
			                	if(!is_null ( $row["SaveState"] )){
			                    	echo "<p>" . $row["SaveState"] . "</p>" ;
			                	}
			                	echo "</li>";
                    	}} else {
                        	echo "0 results";
                    	}
                    	$conn->close();
					?>
				</select>
				<br>
				<input id="submit" type="button" value="Submit">
			</form>
		
		
	</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/vote.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>