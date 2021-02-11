$.post( "chlist.php", function( data ) {
    var obj = JSON.parse(data);
    console.log(obj);
    var i;
    for (i = 0; i < obj.length; i++) 
    {
        holder = obj[1];
        console.log(holder)
        $("#challenge").append('<option value=' & holder[0] &'>Challenge '& holder[0] & holder[1]&' - '& holder[2]&' - ' & holder[3]& '</option>');
    }
  });