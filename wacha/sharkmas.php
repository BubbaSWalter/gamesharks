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
    $title = "Sharkmas Entries";
    include 'include/header.php';
    include 'include/navbar.php';
?>
	<article id="article">
	    <p>Hello <?php echo $uname;?></p>
	    <table style="width:100%">
  			<tr>
    			<th>Username</th>
    			<th>Group</th>
    			<th>Target</th>
  			</tr>
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
				$sql = "SELECT * FROM sharkmas ORDER BY class";
							
				$result = $conn->query($sql);
			
				if ($result->num_rows > 0) {
					// output data of each row
					while($row = $result->fetch_assoc()) {
						echo '<tr>';
						echo '<td>'. $row["username"]. '</td>';
						echo '<td>'. $row["class"]. '</td>';
						echo '<td>'. $row["target"]. '</td>';
						echo '</tr>';
					}} else {
						echo "0 results";
					}
				}
			?>
  			<tr>
    			<td>Jill</td>
    			<td>Smith</td>
    			<td>50</td>
  			</tr>
		</table>
	</article>
	<script type="text/javascript" src="../js/ocean.js"></script>
</body>
</html>