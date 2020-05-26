<?php
    print_r($_POST);
    echo "<br>";
    $_POST['Game'] = str_replace("\\s", "", $_POST['Game']);
    $_POST['Created'] = str_replace("\\s", "", $_POST['Created']);
    $_POST['Type'] = str_replace("\\s", "", $_POST['Type']);
    $_POST['Description'] = str_replace("\\s", "", $_POST['Description']);

    $sql = "INSERT INTO Challenges (ChallengeNum, SubmitBy, Game, Console, Type, Description, SaveState) 
    VALUES ('". $_POST['Num'] ."', '" . $_POST['Created'] . "', '" . $_POST['Game'] . 
    "', '" . $_POST['Consoles'] .  "', '" . $_POST['Type']  . "', '" . $_POST['Description'] ."', '" . 
    $_POST['SaveState'] . "') ON DUPLICATE KEY UPDATE SubmitBy='" . $_POST['Created'] . "', Game='" . 
    $_POST['Game'] . "', Console='" . $_POST['Consoles'] . "', Type='" . $_POST['Type'] . "', Description='" . 
    $_POST['Description'] . "', SaveState='" . $_POST['SaveState'] . "';";
    
    $servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	
	$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}
	
	$result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
	
	
?>
<script>
    setTimeout(function(){
        window.location.href = "https://gamesharks.wizardsrwe.com/wacha/challenges.php"; 
        }, 3000);
</script>
