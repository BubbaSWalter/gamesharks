<?php
	$global = $_GET['sharkpersonwipe'];
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
    print_r($global);
    if($global == "---"){
        header("Location: https://gamesharks.wizardsrwe.com/wacha/humble.php");
    }
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE  FROM `voting` WHERE Username ='" . $global . "'";
    if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}
	$result = $conn->query($sql);
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: https://gamesharks.wizardsrwe.com/wacha/humble.php");
?>