<?php
    MYSQLI_REPORT(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    $host_name = "localhost";
    $username = "root";
    $password = "";
    $database_name = "netflix_database";
    $db = new mysqli($host_name, $username, $password, $database_name);
    if($db->connect_error) die("could not connect to database due to". $db->connect_error);
    ?>