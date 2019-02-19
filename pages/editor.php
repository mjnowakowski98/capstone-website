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

    <!-- Main content -->
    <div id="editor-contentarea" class="container-fluid my-0">
        <div class="row border-top border-bottom">
            <!-- Canvas -->
            <div class="col">
                <div class="col-10 overflow-auto m-0 p-0">
                    <canvas class="m-3 border" width="1024" height="720">
                        <p class="text-danger">Browser not supported</p>
                        <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas#Browser_compatibility">Get one that does</a>
                    </canvas>
                </div>
            </div>

            <!-- Object viewer -->
            <div class="col-2 m-0 p-0 bg-secondary border-left">
                <!-- Todo -->
            </div>
        </div>
    </div>

    <footer class="container-fluid bg-dark fixed-bottom">
        <div class="row">
            <div class="col">
                <p>TEST</p>
            </div>
        </div>
    </footer>

    <script src="/jsscripts/editor.js"></script>
    <?php
        // Scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaultscripts.php");
    ?>
    
</body>
</html>