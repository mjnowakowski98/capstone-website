<!-- TEMPLATE -->

<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/master.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php // Page head
        $pageTitle = "Title";
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaulthead.php");
    ?>
</head>

<body class="bg-light" data-login-state="<?php echo $sessionLoginState; ?>" data-page-action="<?php echo $pageAction; ?>">
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/headers/pageheader.php"); // Header ?>

    <div class="container my-3">
        <!-- Content goes here -->
    </div>

    <?php
        // Footer/scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/footers/pagefooter.php");
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaultscripts.php");
    ?>
    
</body>
</html>