
function LoadChallenge() {
    var Challenge = document.getElementById("challenge").value;
    var Group = document.getElementById("Group").value;
    var DataBase = ''
    alert("Pulling out" + Challenge + " for Group " + Group);
    if (Group == 'Guppies') {
        DataBase = 'Guppy_ScoreBoard';
    }

    $.post("getresults.php", function(data, status){
        var holder = JSON.parse(data)
        holder.forEach(element => {
            alert( "Data Loaded: " + element );
        });
      });
}