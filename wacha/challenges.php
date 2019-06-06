<?php
include '../meistercheck.php';
?>

<?php

	if(isset($_COOKIE["username"])) {
		date_default_timezone_set("America/Chicago");
		$servername = "localhost";
		$username = "u919436859_admin";
		$password = "GjefadD~i63a";
		$dbname = "u919436859_shark";
		$uname = "Guest";
		
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
    $title = "Challenge Lists Management";
    include 'include/header.php';
    include 'include/navbar.php';
?>
	<article id="article">
	    <p>Hello <?php echo $uname;?></p>
	    <div id"remchall">
	        <p>Remove a Challenge</p>
	        <form  action="challengemod/removechallenge.php">
		    <select name="choice">
		        <option > --- </option>
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
                        echo "<option value='" . $row["ChallengeNum"] . "'>Challenge #" . $row["ChallengeNum"] . " - " . $row["Game"] ." - " . $row["Console"] . " - " . $row["Type"] . "</option>";
                    }
                }

            ?>
			</select>
			<br>
            <input type="submit"  value="Remove Challenge">
		</form>
	    </div>
		
		<div id"addchall">
		    <p>Add new Challenge</p>
	        <form  action="challengemod/addchallenge.php" method="post">
		        Challenge Number:<br>
		        <input type="text" name="Num"><br>
		        Created By:<br>
		        <input type="text" name="Created"><br>
			    Game:<br>
		        <input type="text" name="Game"><br>
		        Console:<br>
		        <select name="Consoles">
		            <option value="Gameboy/ Gameboy Color">Gameboy/ Gameboy Color</option>
		            <option value="Gameboy Advance">Gameboy Advance</option>
		            <option value="Nintendo Entertainment System">Nintendo Entertainment System</option>
		            <option value="Super Nintendo Entertainment System">Super Nintendo Entertainment System</option>
		            <option value="SEGA Genesis">SEGA Genesis</option>
		            <option value="SEGA Master System">SEGA Master System</option>
		            <option value="SEGA Game Gear">SEGA Game Gear</option>
		            <option value="Nintendo 64">Nintendo 64</option>
		        </select>
		        <br>
		        Challenge Type:<br>
		        <select name="Type">
		            <option value="Race">Race</option>
		            <option value="Score Attack">Score Attack</option>
		            <option value="Distance">Distance</option>
		            <option value="Game Twist">Game Twist</option>
		            <option value="Gimmick">Gimmick</option>
		            <option value="Other">Other</option>
		        </select></br>
		        Challenge Discrption:</br>
		        <textarea name="Description" rows="5" cols="33"></textarea><br>
		        Save State(Optional):<br>
		        <input type="text" name="SaveState"><br>
		        <br>
                <input type="submit"  value="Add Challenge">
		    </form>
	    </div>
	</article>
	<script type="text/javascript" src="../js/ocean.js"></script>
</body>
</html>