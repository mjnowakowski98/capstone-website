<?php
    function signIn($username, $password) {
        $_SESSION["userId"] = 1;
        $_SESSION["loginState"] = "admin-user";
    }

    function signOut() {
        $_SESSION["userId"] = -1;
        $_SESSION["loginState"] = "no-user";
    }
?>