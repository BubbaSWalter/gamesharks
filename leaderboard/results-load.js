
function LoadChallenge() {
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('ch1');
    var Challenge = document.getElementById("challenge").value;
    if (myParam.length == 0 ){
        Challenge = '1';
    }
    var Group = 'Guppies';
    var DataBase = ''
    if (Group == 'Guppies') {
        DataBase = 'Guppy_ScoreBoard';
    } else{
        DataBase = 'Shark_ScoreBoard';
    }

    
    if (Challenge == '1') {
        $("#Chname").text('SNES - TMNT: Turtles in Time - Distance');
    } else if (Challenge == '2') {
        $("#Chname").text('SNES - Pac-Man 2: The New Adventures - Score Attack');
    } else if (Challenge == '3') {
        $("#Chname").text('SNES - Super Metroid - Race');
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

/*     <td id='pc1name' class="tg-gri2"></td>
    <td id='pc1score' class="tg-gri2"></td>
    <td id='pc1point' class="tg-gri2"></td> */
    count = 1;
    while (count < 17) {
        $("#pc" + count + "name").text("");
        $("#pc" + count + "score").text("");
        $("#pc" + count + "point").text("");
        $("#st" + count + "name").text("");
        $("#st" + count + "point").text("");
        count = count +1;
    }

    $.get( url , function( data ) {
        $( ".result" ).html( data );
        $holder = JSON.parse(data)
        count = 1
        $holder.forEach(element => {
            $("#pc" + count + "name").text(element[0]);
            if (element[1] + " ( " + element[2] + " )" != "null ( null )"){
                if(element[2].substring(0, 2)== '00'){
                    $("#pc" + count + "score").text(element[1] + " ( " + element[2].substring(3) + " )");
                } else {
                    $("#pc" + count + "score").text(element[1] + " ( " + element[2] + " )");
                }
            } else{
                $("#pc" + count + "score").text("");
            }
            $("#pc" + count + "point").text(element[3]);
            count +=1;
        });
      });
      url = "tsgetresults.php?db=" + DataBase;

      /*<td id='st1name' class="tg-gri2"></td>
      <td id='st1point' class="tg-gri2"></td>*/

      $.get( url , function( data ) {
        $( ".result" ).html( data );
        $holder = JSON.parse(data)
        console.log($holder)
        count = 1
        $holder.forEach(element => {
            $("#st" + count + "name").text(element[0]);
            $("#st" + count + "point").text(element[1]);
            count +=1;
        });
      });
}

$( document ).ready(function() {
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('ch1');
    var Challenge = document.getElementById("challenge").value;
    if (myParam.length == 0 ){
        Challenge = '1';
    }
    var DataBase = 'Guppy_ScoreBoard';
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
    $.get( url , function( data ) {
        $( ".result" ).html( data );
        $holder = JSON.parse(data)
        count = 1
        $holder.forEach(element => {
            $("#pc" + count + "name").text(element[0]);
            if (element[1] + " ( " + element[2] + " )" != "null ( null )"){
                console.log(element[2].substring(0, 2));
                if(element[2].substring(0, 2)== '00'){
                    $("#pc" + count + "score").text(element[1] + " ( " + element[2].substring(3) + " )");
                } else {
                    $("#pc" + count + "score").text(element[1] + " ( " + element[2] + " )");
                }
                
            } else{
                $("#pc" + count + "score").text("");
            }
            $("#pc" + count + "point").text(element[3]);
            count +=1;
        });
      });


      url = "tsgetresults.php?db=" + DataBase;

      /*<td id='st1name' class="tg-gri2"></td>
      <td id='st1point' class="tg-gri2"></td>*/

      $.get( url , function( data ) {
        $( ".result" ).html( data );
        $holder = JSON.parse(data)
        console.log($holder)
        count = 1
        $holder.forEach(element => {
            $("#st" + count + "name").text(element[0]);
            $("#st" + count + "point").text(element[1]);
            count +=1;
        });
      });
});