<?php
    
    $uname = "";

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
		curl_close($curl);
        $uname = $response['login'];
        $uid = $response['user_id'];
        $clientid = $response['client_id'];

        if (strlen($uname) < 2)
        header('Location: https://protonjon.wizardsrwe.com/logout.php');
    }
?>