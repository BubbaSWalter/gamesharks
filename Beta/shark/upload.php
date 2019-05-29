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

$Username = mysqli_real_escape_string($conn, $_POST['username']);
$Choice = mysqli_real_escape_string($conn, $_POST['choice']);
$Date = date("Y/m/d h:i:sa");

$sql = "INSERT INTO sharkvoting (time,Username,Choice) 
VALUES ('$Date','$Username','$Choice') ON DUPLICATE KEY UPDATE    
time='$Date', Choice='$Choice'";
if ($conn->query($sql) === TRUE) {
    echo "Page saved!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>