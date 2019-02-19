<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/master.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php // Page head
        $pageTitle = "JAE - Editor";
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaulthead.php");
    ?>

    <link href="/css/editor.css" type="text/css" rel="stylesheet">
</head>

<body class="bg-light" data-login-state="<?php echo $sessionLoginState; ?>" data-page-action="<?php echo $pageAction; ?>">
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/headers/editorheader.php"); // Header ?>

    <div class="container-fluid my-3">
        <div class="row">
            <div class="col">
                
            </div>
        </div>
    </div>

    <script src="/jsscripts/editor.js"></script>
    <?php
        // Scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaultscripts.php");
    ?>
    
</body>
</html>