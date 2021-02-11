<?php
    $servername = "localhost";
    $username = "u919436859_admin";
    $password = "GjefadD~i63a";
    $dbname = "u919436859_shark";

    $challenge_list = [];
    #print $database;
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM `challenge List` ORDER BY `challenge List`.`Challenge_Number` ASC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {


                $dumb = [$row['Challenge_Number'], $row['Challenge_Console'], $row['Challenge_Game'],];
                array_push($challenge_list, $dumb );
            }
            echo(json_encode($challenge_list));
            echo count($challenge_list);
          } else {
            echo "0 results";
          }
        
        $conn->close();
        ?>