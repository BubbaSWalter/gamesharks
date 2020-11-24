<?php
date_default_timezone_set("America/Chicago");
$error = '';
$servername = "localhost";
$username = "u919436859_admin";
$password = "GjefadD~i63a";
$dbname = "u919436859_shark";

$conn = new mysqli($servername, $username, $password, $dbname); // Create connection
if ($conn->connect_error) {     // Check connection
    die("Connection failed: " . $conn->connect_error);
} 

$Username = mysqli_real_escape_string($conn, $_GET['username']);
$UserID = mysqli_real_escape_string($conn, $_GET['uid']);
$Date = date("Y/m/d h:i:sa");
$class = 'Shark/Meister';


require '../../../sharkcheck.php';
require '../../../meistercheck.php';
echo ' check 1 '.$Username . " check 2 ".$_GET['username'];
if (in_array($uname, $shark_array)){
    $class = 'Shark/Meister';
}
if (in_array($uname, $meister_array)){
    $class = 'Shark/Meister';
}


$sql = "INSERT INTO sharkmas (dt, userid ,username, class) 
VALUES ('$Date','$UserID', '$Username','$class') ON DUPLICATE KEY UPDATE    
dt='$Date', username = '$Username',class='$class'";
if ($conn->query($sql) === TRUE) {
    //echo "Page saved!";
} else {
    $error = "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//header( 'Location: https://gamesharks.wizardsrwe.com/sharkmas/stage1/guppy/confirm.php' );
?>