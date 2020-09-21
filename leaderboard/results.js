
function LoadChallenge() {
    var Challenge = document.getElementById("challenge").value;
    var Group = document.getElementById("Group").value;
    var DataBase = ''
    alert("Pulling out" + Challenge + " for Group " + Group);
    if (Group == 'Guppies') {
        DataBase = 'Guppy_ScoreBoard';
    }
    $.post( "getresults.php", { db: DataBase, Ch: Challenge})
    .done(function( data ) {
        $holder = JSON.parse(data)
        console.log(data);
    });
}