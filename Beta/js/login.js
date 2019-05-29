shark = false;
$( document ).ready(function() {
	$.ajax({
		type:"GET",
		url:"https://id.twitch.tv/oauth2/validate",
		headers: {
			"Authorization":"OAuth "+ token
		},
		success: function(data){
			username = data['login']
			console.log(username)
		}
	}); 
	setTimeout(function(){
	    if(username === "Guest"){
	        $("#login").show();
	        if(window.location.pathname != "/index.php"){
	            document.location.href = "/index.php"  
	        }
	        
	    }
	    if (username != "Guest"){
	        $("#login").hide();
	        
	    }
	    if(window.location.pathname != "/voting.php"){
	        console.log(username)
            $.ajax({
		        type:"GET",
		        url:"process.php?username=" + username,
		        success: function(data){
		            console.log(data)
                    document.location.href = data
		        }
	        });			
	    }

	    if(window.location.pathname == "/voting.php"){
            document.getElementById("username").innerHTML = username;
            
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