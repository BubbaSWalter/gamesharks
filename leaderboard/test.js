$.post( "chlist.php", function( data ) {
    var obj = JSON.parse(data);
    console.log(obj);
    var i;
    for (i = 0; i < obj.length; i++) {
        $("#challenge").append('<option value=' & obj[0] &'>Challenge '& obj[0] & obj[1]&' - '& obj[2]&' - ' & obj[3]& '</option>');
    }


  });