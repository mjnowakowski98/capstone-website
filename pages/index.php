<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/master.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pageTitle = "JAE - Index";
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaulthead.php");
    ?>
</head>

<body class="bg-light" data-login-state="<?php echo $sessionLoginState; ?>" data-page-action="<?php echo $pageAction; ?>">
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/headers/pageheader.php"); // Header ?>

    <div class="container my-3">
        <div class="row">
            <div class="col">
                <h1>Welcome to JAE</h1>
            </div>
        </div>

        <div class="row">
            <div class="col panel-overflow">
                <h2>Featured Content</h2>
                <hr>

                <?php // Generate featured content from DB ?>
                <h2>Session UserId: <?php echo $sessionUserId; ?></h2>
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