<?php
    if(isset($_COOKIE["username"])) {
        echo '<br>';
        echo 'Your UserName: ' . $uname . '</br>';
        echo 'If the above line says "GUEST" and "0" contact Bubba before proceeding.';
    } else {
        echo '<br>';
        echo 'Your UserName:  GUEST </br>';
        echo 'If the above line says "GUEST" and "0" or their are blank contact Bubba before proceeding.';
    }

?>