<?php
    date_default_timezone_set('America/Chicago');
    if($_GET['vote1'] == $_GET['vote2'] Or 
        $_GET['vote1'] == $_GET['vote3'] Or 
        $_GET['vote2'] == $_GET['vote1'] Or 
        $_GET['vote2'] == $_GET['vote3'] Or 
        $_GET['vote3'] == $_GET['vote1'] Or 
        $_GET['vote3'] == $_GET['vote2'] 
         ){
             echo "Error: you Voted once Challenge More than Once";
         }else{
            $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
            if ($conn->connect_error) {     // Check connection
                die("Connection failed: " . $conn->connect_error);
            } else{
                $Username = mysqli_real_escape_string($conn, $_GET['username']);
                $Choice1 = mysqli_real_escape_string($conn, $_GET['vote1']);
                $Choice2 = mysqli_real_escape_string($conn, $_GET['vote2']);
                $Choice3 = mysqli_real_escape_string($conn, $_GET['vote3']);
                $Date = date("Y/m/d h:i:sa");

                $sql = "INSERT INTO testvoting (time,Username,Choice1,choice2,choice3) 
                    VALUES ('$Date','$Username','$Choice1','$Choice2','$Choice3') ON DUPLICATE KEY UPDATE    
                    time='$Date', Choice1='$Choice', Choice2='$Choice', Choice3='$Choice'
                    ";
                if ($conn->query($sql) === TRUE) {
                    echo "Page saved!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }


         }
?>