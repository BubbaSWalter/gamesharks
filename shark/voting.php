<?php
	include '../sharkcheck.php';
	include '../meistercheck.php';
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
		
		if (!in_array($uname, $shark_array) and !in_array($uname, $meister_array)){
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
		Person Voting:<span id="username"><?php echo $uname; ?></span><br>
	    <?php
	        $Choice = "";
	        $conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {     // Check connection
					die("Connection failed: " . $conn->connect_error);
			}
			$sql = "SELECT * FROM sharkvoting WHERE Username = '$uname'";
	        $result = $conn->query($sql);
	        //time,Username,Choice
	        if ($result->num_rows > 0) {
	            // output data of each row
	            while($row = $result->fetch_assoc()) {
	                echo "<span> Current Choice:" . "Challenge#  " . $row["Choice"] . "</span>";
	                $Choice = $row["Choice"];
	            }
	            
	        } else {
	            echo "<span> Current Choice: NONE </span>";
	            echo "</br>";
	                }
	    ?>
		
		<form action="upload.php">
			<input type="hidden" name="username" value="<?php echo $uname; ?>">

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
					}
				    
				} else {
					echo "0 results";
					
				}
				$sql = "SELECT * FROM `Challenges` WHERE `ChallengeNum`='" . $winners['first'] . "' or `ChallengeNum`='" . $winners['second'] . "' or `ChallengeNum`='" . $winners['third'] . "' or `ChallengeNum`='" . $winners['fourth'] . "' or `ChallengeNum`='" . $winners['fifth'] . "'  ORDER BY ChallengeNum ASC";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
						echo "<h3>Challenge #" . $row["ChallengeNum"] . "</h3>";
						echo "<ul>";
						echo "   <li>" . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "</li>";
						echo "</ul>"
						echo "<h3> Challenge Description </h3>";
						echo "<ul>";
						echo "   <li>" . $row["Description"] . "</li>";
						echo "</ul>";
						$cnum = str_replace("'", "&apos;", $row["ChallengeNum"]);
						$game = str_replace("'", "&apos;", $row["Game"]);
						$console = str_replace("'", "&apos;", $row["Console"]);
						$type = str_replace("'", "&apos;", $row["Type"]);
						$holder = $cnum . " - " . $game ." - " . $console . " - " . $type;
						if( substr($Choice , 0,2 ) == substr($holder , 0,2 ) ){
						    echo 'Vote for this challenge:	<input type="radio" name="vote1" align="center" value="' . $holder . '" checked></br>';
						}else{
						    echo 'Vote for this challenge:	<input type="radio" name="vote1" align="center" value="' . $holder . '"></br>';
						}
						echo '</br>';
					}
				} else {
                    echo "0 results";
                }
                $conn->close();

			?>
			<input type="submit" value="Vote">
		</form>

		
		
	</article>
	<script type="text/javascript" src="js/list.js"></script>
	<script type="text/javascript" src="js/vote.js"></script>
	<script type="text/javascript" src="js/ocean.js"></script>
    

</body>
</html>