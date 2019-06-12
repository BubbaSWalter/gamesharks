<?php
	$global = $_GET['wipe'];
	$servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
    print_r($global);
    echo <br>;
    if($global == 'shark'){
        $sql = "SELECT * FROM `sharkvoting`";
    } else if($global == 'community'){
        $sql = "SELECT * FROM `voting`";
    } else{
        header("Location: https://gamesharks.wizardsrwe.com/wacha/humble.php");
    }
    $conn = new mysqli($servername, $username, $password, $dbname); 
    //Create connection
	if ($conn->connect_error) {     // Check connection
		die("Connection failed: " . $conn->connect_error);
	}
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $holder = "INSERT INTO voting (Time, Username, Choice)  VALUES (";
            foreach( $row as $k => $v){
                $holder = $holder .  $v . ",";
            }
            $holder = $holder . ")<br>";
            echo $holder;
        }
    } else {
        echo "0 results";
    }
?>