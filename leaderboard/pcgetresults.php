<?php
    $servername = "localhost";
    $username = "u919436859_admin";
    $password = "GjefadD~i63a";
    $dbname = "u919436859_shark";

    $database = $_POST['db'];
    $database = 'Guppy_ScoreBoard';
    $Challenge = $_POST['ch'];
    $Challenge = '1' ;
    $holder = [];
    #print $database;
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * FROM $database WHERE Challenge_Score='$Challenge' ";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                
              echo "id: " . $row["User_Name"] "<br>";
            }
          } else {
            echo "0 results";
          }
        echo(json_encode($holder));
	    $conn->close();
?>