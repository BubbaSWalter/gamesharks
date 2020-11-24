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

$Username = $_GET['username'];
echo $Username . '</br>';
echo $_GET['username']. '</br>';
$UserID = mysqli_real_escape_string($conn, $_GET['uid']);
$Date = date("Y/m/d h:i:sa");
$class = 'Shark/Meister';


require '../../../sharkcheck.php';
require '../../../meistercheck.php';
if (in_array($uname, $shark_array)){
    $class = 'Shark/Meister';
}
if (in_array($uname, $meister_array)){
    $class = 'Shark/Meister';
}
$sql = "INSERT INTO `sharkmas`(`dt`, `userid`,  `class`, `target`) VALUES ('$Date','$UserID','$class',NULL) ON DUPLICATE KEY UPDATE `dt` = '$Date'";
//$sql = "INSERT INTO sharkmas (`dt`, `userid` , `username` , `class` , `target`)  VALUES ('$Date','$UserID', 'NULL', '$class', NULL) ";
if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    
}
echo $sql;
$conn->close();
//header( 'Location: https://gamesharks.wizardsrwe.com/sharkmas/stage1/guppy/confirm.php' );
?>
