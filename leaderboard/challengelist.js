$.post( "chlist.php", function( data ) {
    var obj = JSON.parse(data);
    console.log(obj);
    var i;
    for (i = 0; i < obj.length; i++) 
    {
        holder = obj[i];
        console.log(holder)
        holding = 'Challenge ' + holder[0] + ' : ' + holder[1] + ' - ' + holder[2] + ' - ' + holder[3];
        console.log(holding);
        var select = document.getElementById('challenge');
        var opt = document.createElement('option');
        opt.value = holder[0];
        opt.text = holding;
        select.appendChild(opt);

    }
  });