<?php
    function signIn($email, $password) {
        global $db;
        $validSignIn = false;

        try {
            $sql  = "CALL GetUserIdByEmail(:email, @userId);";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();

            $stmt = $db->query("SELECT @userId");

            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            $userId = $results["@userId"];
            if($userId <= 0) return $validSignIn;

            $sql  = "CALL GetUserCredentials(:userId);";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':userId', $userId);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password, $results["user_passhash"])) {
                $sql = "CALL GetUserStates(:userId);";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':userId', $userId);
                $stmt->execute();
                $results = $stmt->fetch(PDO::FETCH_ASSOC);
                if($results["user_disabled"]) return $validSignIn;

                $validSignIn = true;
                $_SESSION["userId"] = $userId;
                if($results["user_isadmin"]) $_SESSION["loginState"] = "admin-user";
                else $_SESSION["loginState"] = "basic-user";
            }

        } catch(PDOException $e) { die($e->getMessage()); }

        return $validSignIn;
    }

    function signOut() {
        $_SESSION["userId"] = -1;
        $_SESSION["loginState"] = "no-user";
    }
?>