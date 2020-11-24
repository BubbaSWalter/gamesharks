<?php
    if(isset($_COOKIE["username"])) {
        echo '<br>';
        echo 'Your UserName: ' . $uname . '</br>';
        echo 'If the above line says "GUEST" or its are blank contact Bubba before proceeding.';
    } else {
        echo '<br>';
        echo 'Your UserName:  GUEST </br>';
        echo 'If the above line says "GUEST" or its are blank contact Bubba before proceeding.';
    }

?>