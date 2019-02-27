<?php
    function getUserInformation($userId) {
        global $db;
        $userInfo = null;
        try {
            $sql  = "CALL GetUserInformation(:userId);";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':userId', $userId);
            $stmt->execute();
            $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {  }
        return $userInfo;
    }

?>