$.post( "chlist.php", function( data ) {
    var obj = JSON.parse(data);
    console.log(obj);
    var i;
    for (i = 0; i < obj.length; i++) 
    {
        holder = obj[i];
        console.log(holder)
        holding = '>Challenge '& holder[0] & holder[1]&' - '& holder[2]&' - ' & holder[3]
        var x = document.getElementById("mySelect");
        var option = document.createElement("option");
        option.text = holding ;
        opt.value = holder[0];
        x.add(option);
    }
  });