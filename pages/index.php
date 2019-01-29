<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/master.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        $pageTitle = "JAE - Index";
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/defaulthead.php");
    ?>
</head>
<body class="bg-light">
    <!-- Header -->
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/pageheader.php"); ?>

    <div class="container mt-3">
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
            </div>

            <div class="col-4">
                
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