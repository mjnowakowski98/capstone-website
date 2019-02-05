<?php
    session_start();
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/dbcontroller.php");
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/auth.php");

    $pageAction = "none";
    $masteraction = isset($_REQUEST["masterAction"]) ? $_REQUEST["masterAction"] : null;
    switch($masteraction) {
        case "signIn":
            $loginSuccess = signIn($_REQUEST["signInEmail"], $_REQUEST["signInPassword"]);
            if(!$loginSuccess) $pageAction = "signInFailed";
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