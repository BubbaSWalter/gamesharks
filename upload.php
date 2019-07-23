<?php
date_default_timezone_set("America/Chicago");
$servername = "localhost";
$username = "u919436859_admin";
$password = "GjefadD~i63a";
$dbname = "u919436859_shark";
print_r($_GET);
echo "<br>";
$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 

if($_GET['vote1'] == $_GET['vote2'] Or 
        $_GET['vote1'] == $_GET['vote3'] Or 
        $_GET['vote2'] == $_GET['vote1'] Or 
        $_GET['vote2'] == $_GET['vote3'] Or 
        $_GET['vote3'] == $_GET['vote1'] Or 
        $_GET['vote3'] == $_GET['vote2'] 
         ){
            $error = urlencode("Error: You voted one challenge more than Once");
            header( 'Location: https://gamesharks.wizardsrwe.com/beta/voting.php?error='. $error .'&vote1='. $_GET["vote1"] . '&vote2='. $_GET["vote2"] .'&vote3='. $_GET["vote3"] );

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
                if($Choice1 == ""){
                    $Choice1 = "00 - No Vote Choice 1 -". $Username;
                }
                if($Choice2 == ""){
                    $Choice2 = "00 - No Vote Choice 2 -". $Username;
                }
                if($Choice3 == ""){
                    $Choice3 = "00 - No Vote Choice 3 -". $Username;
                }

                $sql = "INSERT INTO voting (time,Username,Choice1,Choice2,Choice3) 
                    VALUES ('$Date','$Username','$Choice1','$Choice2','$Choice3') ON DUPLICATE KEY UPDATE    
                    time='$Date', Choice1='$Choice1', Choice2='$Choice2', Choice3='$Choice3'
                    ";
                if ($conn->query($sql) === TRUE) {
                    echo "Page saved!";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                $conn->close();
            }


         }
header( 'Location: https://gamesharks.wizardsrwe.com/confirm.php' );
?>