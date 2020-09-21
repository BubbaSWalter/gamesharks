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
                $Ch1 = $row['Challenge 1'];
            
                if ($Ch1 == NULL) {
                    $Ch1 = 0;
                }

                $Ch2 = $row['Challenge 2'];
                if ($Ch2 == NULL) {
                    $Ch2 = 0;
                }

                $Ch3 = $row['Challenge 1'];
                if ($Ch3 == NULL) {
                    $Ch3 = 0;
                }

                $Ch4 = $row['Challenge 1'];
                if ($Ch4 == NULL) {
                    $Ch4 = 0;
                }

                $Ch5 = $row['Challenge 1'];
                if ($Ch5 == NULL) {
                    $Ch5 = 0;
                }

                $Ch6 = $row['Challenge 1'];
                if ($Ch6 == NULL) {
                    $Ch6 = 0;
                }

                $Ch7 = $row['Challenge 1'];
                if ($Ch7 == NULL) {
                    $Ch7 = 0;
                }

                $Ch8 = $row['Challenge 1'];
                if ($Ch8 == NULL) {
                    $Ch8 = 0;
                }

                $Ch9 = $row['Challenge 1'];
                if ($Ch9 == NULL) {
                    $Ch9 = 0;
                }

                $Ch10 = $row['Challenge 1'];
                if ($Ch10 == NULL) {
                    $Ch10 = 0;
                }

                $math = $Ch1 + $Ch2 + $Ch3 + $Ch4 + $Ch5 + $Ch6 + $Ch7 + $Ch8 +$Ch9 + $Ch10; 
                array_push( $holder[$row['User_Name']] = $math );
            }
            echo(json_encode($holder));
          } else {
            echo "0 results";
          }
        
        $conn->close();
        ?>