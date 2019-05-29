function vote() {
	choice = $("#choice option:selected").text()
	console.log(choice)
	console.log(username)
	$.post("upload.php",
  {
    username: username,
    choice: choice
  },
  function(data, status){
    console.log(data);
  });
  var dt = new Date();
  dt.setHours( dt.getHours() + 4 );
  document.cookie = "username=" + token + "; expires=" + dt.toUTCString() + "; path=/confirm.php;";
  location.href = "confirm.php";
}

