<?php
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/master.php");
    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/user.php");

    $userId = isset($_REQUEST["userId"]) ? $_REQUEST["userId"] : 0;
    $userInfo = getUserInformation($userId);
    if(!$userInfo) header("Location: /");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php // Page head
        $pageTitle = "JAE - " . $userInfo["username"];
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaulthead.php");
    ?>

    <link href="/css/userprofile.css" type="text/css" rel="stylesheet">
</head>

<body class="bg-light" data-login-state="<?php echo $sessionLoginState; ?>" data-page-action="<?php echo $pageAction; ?>">
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/headers/pageheader.php"); // Header ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-2 text-center">
                <img src="/public/profileimage/<?php
                    if(isset($userInfo["profileImage"])) echo $userId . $userInfo["profileImage"];
                    else echo "default.png";
                ?>" class="profileimg img-thumbnail">
            </div>

            <div class="col">
                <h2 class="py-2 px-0 mx-0"><?php echo $userInfo["username"]; ?></h2>
            </div>
        </div>
        <hr>

        <div class="row">
            <div class="col-4">
                <h3 class="mb-3">Information</h3>
                <p class="my-1"><strong>Email:</strong> <?php echo $userInfo["email"]; ?></p>
                <p class=my-1><strong>Joined:</strong> <?php echo $userInfo["createdDate"]; ?></p>
            </div>

            <div class="col border-left">
                <h3>Animations</h3>
                <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/forms/animationbrowser.php"); ?>
            </div>
        </div>
    </div>

    <?php
        // Footer/scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/footers/pagefooter.php");
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaultscripts.php");
    ?>
    
</body>
</html>