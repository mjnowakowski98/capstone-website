<?php
    session_start();
    $sessionUserId = (isset($_SESSION["userId"])) ? $_SESSION["userId"] : -1;
    
?>