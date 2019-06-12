<?php
	$global = $_GET['wipe'];
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
    print_r($global);
    echo <br>;
    if($global == 'shark'){
        $sql = "DELETE FROM `sharkvoting`";
    } else if($global == 'community'){
        $sql = "DELETE FROM `voting`";
    } else{
        header("Location: https://gamesharks.wizardsrwe.com/wacha/humble.php");
    }
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //Create connection
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