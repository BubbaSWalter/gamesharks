$.post( "chlist.php", function( data ) {
    var $challenge_list = JSON.stringify(data);
    console.log(Array.from($challenge_list));
    


  });