$( document ).ready(function() {
	$.ajax({
		type:"GET",
		url:"https://id.twitch.tv/oauth2/validate",
		headers: {
			"Authorization":"OAuth "+ token
		},
		success: function(data){
			username = data['login']
			$("#username").text(username)
		}
	}); 
	
	setTimeout(function(){
        if(
            username != "nintendocaprisun" && username != "faronheights" &&
            username != "medz" && username != "protonjon" &&
            username != "thejewker" && username != "crazysunshine" &&
            username != "dantheenigma" && username != "kuuribro" &&
            username != "mastertimethief" && username != "heisanevilgenius" &&
            username != "megagwolf" && username != "tallmanstan" &&
            username != "khead161" && username != "smashtoons" &&
            username != "myohel0" && username != "bubbaswalter"
        ){
            document.location.href = "/";
        }	
	}, 500);


});

token=checkCookie();
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