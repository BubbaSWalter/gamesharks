$.post( "chlist.php", function( data ) {
    var $challenge_list = JSON.stringify(data);
    console.log($challenge_list);
    


  });