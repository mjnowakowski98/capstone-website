<?php
    function signIn($username, $password) {
        global $sessionUserId;
        $sessionUserId = 1;
        $_SESSION["userId"] = $sessionUserId;
    }

    function signOut() {
        global $sessionUserId;
        $sessionUserId = -1;
        $_SESSION["userId"] = $sessionUserId;
    }
?>