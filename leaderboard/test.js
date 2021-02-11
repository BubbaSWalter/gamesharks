$.post( "chlist.php", function( data ) {
    $challenge_array = data; 
    console.log(Array.from($challenge_array));
    


  });