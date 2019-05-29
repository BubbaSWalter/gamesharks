<?php
//first=9&second=14&third=18&fourth=24&fifth=42
    $sql = "UPDATE `winner` SET `first`='" . $_GET['first'] . "',`second`=" . $_GET['second'] . ",`third`=" . $_GET['third'] . ",`fourth`=" . $_GET['fourth'] . ",`fifth`=" . $_GET['fifth'];
    $servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
	
	// Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
	
?>