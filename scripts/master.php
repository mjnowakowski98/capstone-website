<?php
    session_start();
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/dbconnection.php");
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/auth.php");

    $pageAction = "none";
    $masteraction = isset($_REQUEST["masterAction"]) ? $_REQUEST["masterAction"] : null;
    switch($masteraction) {
        case "signIn":
            $loginSuccess = signIn($_REQUEST["signInEmail"], $_REQUEST["signInPassword"]);
            if(!$loginSuccess) $pageAction = "signInFailed";
            break;

        case "signUp":
            $signUpSuccess = signUp($_REQUEST["signUpUsername"], $_REQUEST["signUpEmail"], $_REQUEST["signUpPassword"]);
            if(!$signUpSuccess) $pageAction = "signUpFailed";
            break;

        case "signOut":
            signOut();
            break;

        case "searchAnimations":
            break;

        default:
            break;
    }

    $sessionUserId = isset($_SESSION["userId"]) ? $_SESSION["userId"] : -1;
    $sessionLoginState = isset($_SESSION["loginState"]) ? $_SESSION["loginState"] : "no-user";
?>