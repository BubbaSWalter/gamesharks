<?php
    $servername = "localhost";
    $username = "u919436859_admin";
    $password = "GjefadD~i63a";
    $dbname = "u919436859_shark";

    #$database = $_GET['db'];
    $database = 'Guppy_ScoreBoard';
    #$Challenge = $_GET['ch'];
    $Challenge = '1' ;
    $holder = [];
    #print $database;
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM $database WHERE Challenge_Num = '$Challenge' ORDER By Challenge_Points DESC";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $score ='';
                if(strlen($row['Challenge_Score_Sup']) > 0){
                  $score = $row['Challenge_Score_Sup'];
                  
                } else {
                  $score = $row['Challenge_Score'];
                }
                $dumb = [$row['User_Name'], $score, $row['Challenge_TIme'], $row['Challenge_Points']];
                array_push($holder, $dumb );
            }
            echo(json_encode($holder));
          } else {
            echo "0 results";
          }
        
        $conn->close();
        ?>