
function LoadChallenge() {
    var Challenge = document.getElementById("challenge").value;
    var Group = document.getElementById("Group").value;
    var DataBase = ''
    alert("Pulling out" + Challenge + " for Group " + Group);
    if (Group == 'Guppies') {
        DataBase = 'Guppy_ScoreBoard';
    }
    $.post( "getresults.php", { db: DataBase})
    .done(function( data ) {
      alert( "Data Loaded: " + data );
      console.log(data);
    });
}