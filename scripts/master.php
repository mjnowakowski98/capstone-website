<?php
    session_start();
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/auth.php");

    $masteraction = isset($_REQUEST["masterAction"]) ? $_REQUEST["masterAction"] : null;
    switch($masteraction) {
        case "signIn":
            signIn($_REQUEST["signInUsername"], $_REQUEST["signInPassword"]);
            break;

        case "signOut":
            signOut();
            break;

        default:
            break;
    }

    $sessionUserId = isset($_SESSION["userId"]) ? $_SESSION["userId"] : -1;
    $sessionLoginState = isset($_SESSION["loginState"]) ? $_SESSION["loginState"] : "no-user";
?>