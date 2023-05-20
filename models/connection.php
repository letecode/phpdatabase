<?php

    $dbname = 'letecodedatabase';
    $dbhost = 'localhost';
    $dbuser = "root";
    $dbpassword = "root";
    $port = "8889";

    $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname, $dbuser, $dbpassword);

    if($db == null ) {
        die("erreeur de connxion à la base de donnees");
    }

?>