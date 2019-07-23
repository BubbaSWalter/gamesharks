<?php
    //sharkadd=bubbaswalter&mesiteradd=bubbaswalter
    //echo "Meister to add: " . $_GET["mesiteradd"] . "<br>";
    //echo "Shark to add: " . $_GET["sharkadd"];
    $SharkName = "";
    $MesiterName = "";
    $sql = "";
    //strtolower ( string $string )
    $servername = "localhost";
	$username = "u919436859_admin";
	$password = "GjefadD~i63a";
	$dbname = "u919436859_shark";
    
    if($_GET["mesiteradd"] != ""){
        echo "Meister to add: " . $_GET["mesiteradd"] . "<br>";
        $sql = "INSERT INTO `meister` (`ID`, `username`) VALUES (NULL, '" . strtolower($_GET["mesiteradd"]) . "')";
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		$result = $conn->query($sql);
    }
    if($_GET["sharkadd"] != ""){
        echo "Meister to add: " . $_GET["sharkadd"] . "<br>";
        $sql = "INSERT INTO `sharks` (`ID`, `username`) VALUES (NULL, '".$_GET["sharkadd"] ."')";
        $conn = new mysqli($servername, $username, $password, $dbname); // Create connection
		if ($conn->connect_error) {     // Check connection
			die("Connection failed: " . $conn->connect_error);
		}
		$result = $conn->query($sql);
    }
    header("Location: https://gamesharks.wizardsrwe.com/wacha/user.php");
    
?>