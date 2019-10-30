function list() {
	if($('#list').is(":visible")){
		console.log("Can See")
		$('#list').hide();
	}else if($("#list").is(":hidden")){
		console.log("Can't See")
		$('#list').show();
	}
}