<?php 
	$uname = "guest";
	if(isset($_COOKIE["username"])) {
        $uname = $_COOKIE["username"];
        
        $curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://id.twitch.tv/oauth2/validate",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => array(
				"Authorization: OAuth ". $uname 
			),
		));
		
		$resp = curl_exec($curl);
		$response = json_decode($resp, true);
		
		$uname = $response['login'];
		curl_close($curl);
    }
?>
?>
<?php
    $title = "Access Denied";
    include 'include/header.php';
?>
	<article id="article">
	    <p>Hello <?php echo $uname; ?>:</p>
	    <p>I do not know how you found this site but the page you tried to access is not for your eyes.</p>
	    <p>Need to authenticate? Click this Link. <a href="https://id.twitch.tv/oauth2/authorize?response_type=token&client_id=p1bz1fklprq12zah2vz810xpqq33s4&redirect_uri=https://gamesharks.wizardsrwe.com/authy">Login</a></p>
	</article>
	<script type="text/javascript" src="../js/ocean.js"></script>
</body>
</html>