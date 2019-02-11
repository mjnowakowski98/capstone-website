<?php
    $dsn = "mysql:host=localhost;dbname=capstone;";
    $dbuserName="capstone";
    $dbpassword="0000";
    try { $db = new PDO($dsn, $dbuserName, $dbpassword); }
    catch(PDOException $e) {
        echo $e->getMessage();
        die("Can't connect to database");
    }
?>