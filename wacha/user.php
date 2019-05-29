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
		
		$shark_array = array("bubbaswalter", "flamingrok", "kyon2570", "renoko", "themaniacalgamer
", "tymestalker", "thejewker");
    }
    
    if (!in_array($uname, $shark_array)){
			header( 'Location: https://gamesharks.wizardsrwe.com/wacha/accessdenied.php' );
	}
?>
<?php     
    $title = "User Management";
    include 'include/header.php';
    include 'include/navbar.php';
?>
	<article id="article">
	    <p>Hello <?php echo $uname;?></p>
		<div id="sharklist">
			<p>Shark List</p>
			<form  action="usermod/removeshark.php">
				<select name="sharks" size="20"  >

					<?php
						$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
						if ($conn->connect_error) {     // Check connection
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql = "SELECT username FROM sharks ORDER BY username ASC";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<option value='" . $row["username"] ."'>" . $row["username"] . "</option>";
							}
						}
						$conn->close();
					?>
				</select>
				<br>
				<input type="submit"  value="Remove Shark">
			</form>
			
			
		</div>
	    

		<div id="meisterlist">
			<p>Meister List</p>
			<form  action="usermod/removemod.php">
				<select id="meister" name="meister" size="20">
					<?php
						$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
						if ($conn->connect_error) {     // Check connection
							die("Connection failed: " . $conn->connect_error);
						} 
						$sql = "SELECT username FROM meister ORDER BY username ASC";
						$result = $conn->query($sql);
						if ($result->num_rows > 0) {
							// output data of each row
							while($row = $result->fetch_assoc()) {
								echo "<option value='" . $row["username"] ."'>" . $row["username"] . "</option>";
							}
						}
						$conn->close();
					?>
				</select>
				<br>
				<input type="submit"  value="Remove Meister">
			</form>
		</div>
		
		<div id="usermanagemnt">
		    <p>User Management Settings</p>
		    <form  action="usermod/adduser.php">
                Add Shark:*<br>
                <input type="text" name="sharkadd"><br>
                Add Meister:*<br>
                <input type="text" name="mesiteradd"><br>* Must be Lowercase<br>
                <input type="submit" value="AddUser">
                
		    </form>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	    From Bubba - My name is on the shark list for testing purposes only.
	</article>
	<script type="text/javascript" src="../js/ocean.js"></script>
	<script type="text/javascript" src="js/select.js"></script>
</body>
</html>