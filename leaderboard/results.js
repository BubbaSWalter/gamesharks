
function LoadChallenge() {
    var Challenge = document.getElementById("challenge").value;
    var Group = document.getElementById("Group").value;
    var DataBase = ''
    alert("Pulling out" + Challenge + " for Group " + Group);
    if (Group == 'Guppies') {
        DataBase = 'Guppy_ScoreBoard';
    } else{
        DataBase = 'Shark_ScoreBoard';
    }
    url = "pcgetresults.php?db=" + DataBase + "&ch=" + Challenge;
    alert("pcgetresults.php?db=" + DataBase + "&ch=" + Challenge);

    $.get( url , function( data ) {
        $( ".result" ).html( data );
        alert( "Load was performed." );
      });


}