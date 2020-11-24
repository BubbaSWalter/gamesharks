<?php
    if(isset($_COOKIE["username"])) {
        echo 'Your UserName: ' . $uname . '</br>';
        echo 'Your UserID: ' . $uid . '</br>';
        echo 'If the above line says "GUEST" and "0" contact Bubba before proceeding.';
    } else {
        echo 'Your UserName:  GUEST </br>';
        echo 'Your UserID: 0 </br>';
        echo 'If the above line says "GUEST" and "0" or their are blank contact Bubba before proceeding.';
    }

?>