
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

    
    if (Challenge == '1') {
        $("#Chname").text('SNES - TMNT: Turtles in Time - Distance');
    } else if (Challenge == '1') {
        $("#Chname").text('SNES - Pac-Man 2: The New Adventures Score Ataack');
    } else if (Challenge == '2') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '3') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '4') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '5') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '6') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '7') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '8') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '9') {
        $("#Chname").text('REDACTED FOR SPOILERS');
    } else if (Challenge == '10') {
        $("#Chname").text('REDACTED FOR SPOILERS');
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