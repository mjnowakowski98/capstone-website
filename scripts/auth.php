<?php
    function signIn($email, $password) {
        global $db;
        $validSignIn = false;

        try {
            $sql  = "CALL ValidateLogin(:email);";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            $userId = $results["userId"];
            $userDisabled = $results["isDisabled"];
            if(!$userId || $userDisabled) return $validSignIn;

            if(password_verify($password, $results["passHash"])) {
                $validSignIn = true;
                $_SESSION["userId"] = $userId;
                if($results["adminId"]) $_SESSION["loginState"] = "admin-user";
                else $_SESSION["loginState"] = "basic-user";
            }

        } catch(PDOException $e) { die($e->getMessage()); }
        return $validSignIn;
    }

    function signUp($username, $email, $password) {
        global $db;
        $validSignUp = false;
        $passHash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "CALL CreateNewAccount(:username, :email, :passHash);";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':passHash', $passHash);
            $stmt->execute();
            $validSignUp = ($stmt->rowCount() == 1);
        } catch(PDOException $e) { die($e->getMessage()); }

        return $validSignUp;
    }

    function signOut() {
        $_SESSION["userId"] = -1;
        $_SESSION["loginState"] = "no-user";
    }
?>