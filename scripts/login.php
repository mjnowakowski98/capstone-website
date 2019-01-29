<?php
    function signIn($username, $password, $lastPage = null) {
        global $sessionUserId;
        $sessionUserId = 1;
        $_SESSION["userId"] = $sessionUserId;
    }
?>