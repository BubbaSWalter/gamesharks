<?php
include '../meistercheck.php';
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
		
    }
    
    if (!in_array($uname, $meister_array)){
			header( 'Location: https://gamesharks.wizardsrwe.com/wacha/accessdenied.php' );
	}
?>
<?php 
    $title = "Voting Results";
    include 'include/header.php';
    include 'include/navbar.php';
?>
<?php
    $servername = "localhost";
    $username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	            
    $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
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
    $conn->close();
?>
	<article id="article">
	    <p>Hello <?php echo $uname;?></p>
		
		<div id="adminmain">
		<p>Community Results</p>
		
		<?php
			date_default_timezone_set("America/Chicago");
			$servername = "localhost";
			$username = "u919436859_admin";
			$password = "GjefadD~i63a";
			$dbname = "u919436859_shark";

			$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
			if ($conn->connect_error) {     // Check connection
				die("Connection failed: " . $conn->connect_error);
			} 

			$Username = mysqli_real_escape_string($conn, $_POST['username']);
			$Choice = mysqli_real_escape_string($conn, $_POST['choice']);
			$Date = date("Y/m/d h:i:sa");

			$sql = "SELECT `Choice`, COUNT(*) AS `num` FROM voting GROUP BY `Choice`ORDER BY num DESC";
			$result = $conn->query($sql);
			//time,Username,Choice
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p class='stuff'>Challenge: " . $row["Choice"] . " - Count: " . $row["num"] . "</p>";
				}
			} else {
			echo "0 results";
			}
			$conn->close();
			?>
			<p>Shark Response</p>
					<?php
			date_default_timezone_set("America/Chicago");
			$servername = "localhost";
			$username = "u919436859_admin";
			$password = "GjefadD~i63a";
			$dbname = "u919436859_shark";

			$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
			if ($conn->connect_error) {     // Check connection
				die("Connection failed: " . $conn->connect_error);
			} 

			$Username = mysqli_real_escape_string($conn, $_POST['username']);
			$Choice = mysqli_real_escape_string($conn, $_POST['choice']);
			$Date = date("Y/m/d h:i:sa");

			$sql = "SELECT `Choice`, COUNT(*) AS `num` FROM sharkvoting GROUP BY `Choice`ORDER BY num DESC";
			$result = $conn->query($sql);
			//time,Username,Choice
			if ($result->num_rows > 0) {
			// output data of each row
				while($row = $result->fetch_assoc()) {
					echo "<p class='stuff'>Challenge: " . $row["Choice"] . " - Count: " . $row["num"] . "</p>";
				}
			} else {
			echo "0 results";
			}
			$conn->close();
			?>
		</div>
		<div id="winners">
                <form action="voting/winners.php">
                    Winning Choices:<br>
                    First Place: <input type="text" name="first" value="<?php echo $winners['first'] ?>"><br>
                    Second Place: <input type="text" name="second" value="<?php echo $winners['second'] ?>"><br>
                    Third Place: <input type="text" name="third" value="<?php echo $winners['third'] ?>"><br>
                    Fouth Place: <input type="text" name="fourth" value="<?php echo $winners['fourth'] ?>"><br>
                    Fifth Place: <input type="text" name="fifth" value="<?php echo $winners['fifth'] ?>"><br>
                    <input type="submit" value="Update Winners">
                </form>
        </div>
            <div id="clearing">
                
                <form action="voting/full_wipe.php">
                    Wiping all votes in which group<br>
                    <select name="wipe">
                        <option > --- </option>
                        <option value="shark">Wipe Shark Votes</option>
                        <option value="community">Wipe Community Votes</option>
                    </select><br>
                    <input type="submit" value="Wipe All Votes">
                </form>
                <br>
                <form action="voting/shark_wipe.php">
                    Shark Voting Single Person Wipe<br>
                    <select name="sharkpersonwipe">
                        <option > --- </option>
                    <?php 
                        $sql = "SELECT Username FROM sharkvoting ORDER BY Username DESC";
                        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
			            if ($conn->connect_error) {     // Check connection
				            die("Connection failed: " . $conn->connect_error);
			            }
			            $result = $conn->query($sql);
			            if ($result->num_rows > 0) {
			                // output data of each row
				            while($row = $result->fetch_assoc()) {
					            echo "<option value='". $row["Username"] . "'>" . $row["Username"] . "</option>";
				            }
			            }
                    ?>
                    </select><br>
                    <input type="submit" value="Wipe Shark Vote">
                </form>
                <br>
                <form action="voting/community_wipe.php">
                    Community Voting Single Person Wipe<br>
                    <select name="sharkpersonwipe">
                        <option > --- </option>
                    <?php 
                        $sql = "SELECT Username FROM voting ORDER BY Username DESC";
                        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
			            if ($conn->connect_error) {     // Check connection
				            die("Connection failed: " . $conn->connect_error);
			            }
			            $result = $conn->query($sql);
			            if ($result->num_rows > 0) {
			                // output data of each row
				            while($row = $result->fetch_assoc()) {
					            echo "<option value='". $row["Username"] . "'>" . $row["Username"] . "</option>";
				            }
			            }
                    ?>
                    </select><br>
                    <input type="submit" value="Wipe Community Vote">
                </form>
                <br>
                <form action="voting/voting_status.php">
                    Voting Status<br>
                    <select name="status">
                        <option > --- </option>
                        <option value="none">Voting Closed</option>
                        <option value="shark">Enable Shark Only Voting</option></option>
                        <option value="community">Enable Community Voting</option>
                    </select><br>
                    <input type="submit" value="Change Voting Mode">
                </form>
            </div>

	</article>
	<script type="text/javascript" src="../js/ocean.js"></script>
</body>
</html>