<?php
    function signIn($email, $password) {
        global $db;
        $validSignIn = false;

        try {
            $sql  = "CALL GetUserIdByEmail(:email, @userId);";
            $sql .= " SELECT @userId AS userId;";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            echo $stmt->rowCount;
            if(!$stmt->rowCount()) return $validSignIn;

            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            $userId = $results["userId"];

            $sql  = "CALL GetUserCredentials(:userId);";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':userId', $userId);
            $stmt->execute();
            $results = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password, $results["user_passhash"])) {
                $validSignIn = true;
                $_SESSION["userId"] = $userId;
                $_SESSION["loginState"] = "basic-user";
            }

        } catch(PDOException $e) { die($e->getMessage()); }

        return $validSignIn;
    }

    function signOut() {
        $_SESSION["userId"] = -1;
        $_SESSION["loginState"] = "no-user";
    }
?>