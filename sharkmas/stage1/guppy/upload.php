<?php
date_default_timezone_set("America/Chicago");
$servername = "localhost";
$username = "u919436859_admin";
$password = "GjefadD~i63a";
$dbname = "u919436859_shark";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 

$Username = mysqli_real_escape_string($conn, $_GET['username']);
$Date = date("Y/m/d h:i:sa");
$class = 'Guppy';


$sql = "INSERT INTO sharkmas (dt, username, class) 
VALUES ('$Date','$Username','$class') ON DUPLICATE KEY UPDATE    
dt='$Date', class='$class'";
if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header( 'Location: https://gamesharks.wizardsrwe.com/sharkmas/stage1/guppy/confirm.php' );
?>