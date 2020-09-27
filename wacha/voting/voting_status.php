<?php
	$global = $_GET['status'];
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
    print_r($global);
    $sql ="";
    if($global == "---"){
        header("Location: https://gamesharks.wizardsrwe.com/wacha/humble.php");
    } else if($global == "none"){
        $sql = "UPDATE settings SET value='closed' WHERE setting='shark'";
    } else if ($global == "shark"){
        $sql = "UPDATE settings SET value='true' WHERE setting='shark'";
    } else if($global == "community"){
        $sql = "UPDATE settings SET value='false' WHERE setting='shark'";
    }
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
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