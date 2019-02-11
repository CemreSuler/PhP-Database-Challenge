<?php
    $servername = getenv('IP');
    $username = getenv('C9_USER');
    $password = "";
    $database = "c9";
    $dbport = 3306;

    // Create connection
    $db = mysqli_connect($servername, $username, $password, $database, $dbport)
         or die('Error connecting to MySQL server.');
    ?>