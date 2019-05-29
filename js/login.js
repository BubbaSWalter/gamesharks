$( document ).ready(function() {
    token=checkCookie();
	$.ajax({
		type:"GET",
		url:"https://id.twitch.tv/oauth2/validate",
		headers: {
			"Authorization":"OAuth "+ token
		},
		success: function(data){
		    console.log(username)
		 
			username = data['login']
			document.getElementById("username").innerHTML = username;
		}
	});
	setTimeout(function(){
		if(username === "Guest"){
			$("#login").show();
			if(window.location.pathname != "/index.php"){
				document.location.href = "/index.php"  
			}
		}
	}, 1000);
	
})
username = "Guest"





function checkCookie(){
	var name = "username=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for(var i = 0; i <ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) === 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}