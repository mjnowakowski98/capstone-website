<?php
    $dsn = "mysql:host=localhost;dbname=capstone;";
    $userName="capstone";
    $password="Qwaszx4321";
    try { $db = new PDO($dsn, $userName, $password); }
    catch(PDOException $e) {
        echo $e->getMessage();
        die("Can't connect to database");
    }
?>