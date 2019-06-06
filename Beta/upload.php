<?php
    if($_GET['vote1'] == $_GET['vote2'] Or 
        $_GET['vote1'] == $_GET['vote3'] Or 
        $_GET['vote2'] == $_GET['vote1'] Or 
        $_GET['vote2'] == $_GET['vote3'] Or 
        $_GET['vote3'] == $_GET['vote1'] Or 
        $_GET['vote3'] == $_GET['vote2'] 
         ){
             echo "Error: you Voted once Challenge More than Once";
         }else{
            echo $_GET;
         }
?>