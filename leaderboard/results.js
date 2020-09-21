
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

/*     <td id='pc1name' class="tg-gri2"></td>
    <td id='pc1score' class="tg-gri2"></td>
    <td id='pc1point' class="tg-gri2"></td> */


    $.get( url , function( data ) {
        $( ".result" ).html( data );
        alert( data );
        $holder = JSON.parse(data)
        console.log($holder);
        count = 1
        $holder.forEach(element => {
            $("#pc" + count + "name").text(element[0]);
            count +=1;
        });
      });


}