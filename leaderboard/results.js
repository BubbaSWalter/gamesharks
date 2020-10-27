
function LoadChallenge() {
    var Challenge = document.getElementById("challenge").value;
    var Group = document.getElementById("Group").value;
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
            if (element[1] == null){
                $("#pc" + count + "score").text(element[2].substring(3));
            } else{
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
        rank = '1';
        lastscore = '0';
        $holder.forEach(element => {
            if(lastscore == '0'){
                rank = 1;
            }else{
                if(lastscore != element[1]){
                    rank += 1;
                }
            }
            rankholder ='';
            if (rank == '1'){
                rankholder = '1st';
            } else if (rank == '2'){
                rankholder = '2nd';
            }else if (rank == '3'){
                rankholder = '3th';
            }else if (rank == '4'){
                rankholder = '4th';
            }else if (rank == '5'){
                rankholder = '5th';
            }else if (rank == '6'){
                rankholder = '6th';
            }else if (rank == '7'){
                rankholder = '7th';
            }else if (rank == '8'){
                rankholder = '8th';
            }else if (rank == '9'){
                rankholder = '9th';
            }else if (rank == '10'){
                rankholder = '10th';
            }else if (rank == '11'){
                rankholder = '11th';
            }else if (rank == '12'){
                rankholder = '12th';
            }else if (rank == '13'){
                rankholder = '13th';
            }else if (rank == '14'){
                rankholder = '14th';
            }else if (rank == '15'){
                rankholder = '15th';
            }else if (rank == '16'){
                rankholder = '16th';
            }else if (rank == '17'){
                rankholder = '17th';
            }else if (rank == '18'){
                rankholder = '18th';
            }else if (rank == '19'){
                rankholder = '19th';
            }else if (rank == '20'){
                rankholder = '20th';
            }else if (rank == '21'){
                rankholder = '21st';
            }
            $("#st" + count + "rank").text(rankholder);
            $("#st" + count + "name").text(element[0]);
            $("#st" + count + "point").text(element[1]);
            lastscore = element[1];
            count +=1;
        });
      });
}

$( document ).ready(function() {

    urlParams =  window.location.search;
    if (urlParams.length != 0){
        var res = urlParams.match(/\?chnum\=(\d)/);
        const myParam = res[1];
        var Challenge = myParam;
    } else {
        Challenge = '1';
    }

    var DataBase = 'Guppy_ScoreBoard';
    if (Challenge == '1') {
        $("#Chname").text('SNES - TMNT: Turtles in Time - Distance');
    } else if (Challenge == '2') {
        $("#Chname").text('SNES - Pac-Man 2: The New Adventures Score Ataack');
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
    $.get( url , function( data ) {
        $( ".result" ).html( data );
        $holder = JSON.parse(data)
        console.log($holder);
        count = 1
        $holder.forEach(element => {
            $("#pc" + count + "name").text(element[0]);
            if (element[1] == null){
                $("#pc" + count + "score").text(element[2].substring(3));
            } else{
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
        count = 1;
        rank = '1';
        lastscore = '0';
        $holder.forEach(element => {
            if(lastscore == '0'){
                rank = 1;
            }else{
                if(lastscore != element[1]){
                    rank += 1;
                }
            }
            rankholder ='';
            if (rank == '1'){
                rankholder = '1st';
            } else if (rank == '2'){
                rankholder = '2nd';
            }else if (rank == '3'){
                rankholder = '3th';
            }else if (rank == '4'){
                rankholder = '4th';
            }else if (rank == '5'){
                rankholder = '5th';
            }else if (rank == '6'){
                rankholder = '6th';
            }else if (rank == '7'){
                rankholder = '7th';
            }else if (rank == '8'){
                rankholder = '8th';
            }else if (rank == '9'){
                rankholder = '9th';
            }else if (rank == '10'){
                rankholder = '10th';
            }else if (rank == '11'){
                rankholder = '11th';
            }else if (rank == '12'){
                rankholder = '12th';
            }else if (rank == '13'){
                rankholder = '13th';
            }else if (rank == '14'){
                rankholder = '14th';
            }else if (rank == '15'){
                rankholder = '15th';
            }else if (rank == '16'){
                rankholder = '16th';
            }else if (rank == '17'){
                rankholder = '17th';
            }else if (rank == '18'){
                rankholder = '18th';
            }else if (rank == '19'){
                rankholder = '19th';
            }else if (rank == '20'){
                rankholder = '20th';
            }else if (rank == '21'){
                rankholder = '21st';
            }
            $("#st" + count + "rank").text(rankholder);
            $("#st" + count + "name").text(element[0]);
            $("#st" + count + "point").text(element[1]);
            console.log(rank);
            count +=1;
        });
      });
});