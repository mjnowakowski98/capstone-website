<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/master.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php // Page head
        $pageTitle = "Admin Index";
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/defaulthead.php");
    ?>
</head>

<body class="bg-light" data-login-state="<?php echo $sessionLoginState; ?>" data-page-action="<?php echo $pageAction; ?>">
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/pageheader.php"); // Header ?>

    <div class="container mt-3">
        <div class="row">
            <div class="col">
                
            </div>
        </div>
    </div>

    <?php
        // Footer/scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/pagefooter.php");
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/defaultscripts.php");
    ?>
    
</body>
</html>