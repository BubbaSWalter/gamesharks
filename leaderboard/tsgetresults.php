<?php
    $servername = "localhost";
    $username = "u919436859_admin";
    $password = "GjefadD~i63a";
    $dbname = "u919436859_shark";

    $database = $_GET['db'];
    #$database = 'Guppy_ScoreBoard';
    if ($database == 'Guppy_ScoreBoard') {
        $database = 'Guppy_Leaderboard';
    } else if ($database == 'Shark_ScoreBoard') {
        $database = 'Shark_LeaderBoard';
    }

    $holder = [];
    #print $database;
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM $database";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                print_r($row);
            }
            echo(json_encode($holder));
          } else {
            echo "0 results";
          }
        
        $conn->close();
        ?>