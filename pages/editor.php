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
    <div class="container-fluid border-top border-bottom">
        <div class="row my-0">
            <!-- Canvas -->
            <div id="editor-contentarea" class="col-10  m-0 p-3 overflow-auto">
                <canvas class="m-0 border" width="800" height="600">
                    <p class="text-danger">Browser not supported</p>
                    <a href="https://developer.mozilla.org/en-US/docs/Web/HTML/Element/canvas#Browser_compatibility">Get one that does</a>
                </canvas>
            </div>

            <!-- Layers/Frame Objects -->
            <div class="col-2 m-0 p-0 bg-secondary border-left">
                <div class="container overflow-auto">
                    <div class="row bg-label border-bottom">
                        <div class="col">
                            <p class="my-0">Layers</p>
                        </div>

                        <div class="col-2">
                            <button type="button" class="iconbtn-tiny btn btn-outline-success comm-addlayer"></button>
                        </div>
                    </div>

                    <div class="row anim-layer">
                        <div class="col">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="container-fluid bg-dark mt-0 pt-0">
        <div class="row">
            <div class="col-2 py-1 d-flex justify-content-around border-right">
                <button type="button" class="iconbtn btn btn-outline-success"></button>
                <button type="button" class="iconbtn btn btn-outline-danger"></button>
            </div>

            <div class="col-10 py-1">
                <button type="button" class="iconbtn btn btn-outline-primary"></button>
                <button type="button" class="iconbtn btn btn-outline-primary"></button>
                <button type="button" class="iconbtn btn btn-outline-primary"></button>
                <button type="button" class="iconbtn btn btn-outline-primary"></button>
                <button type="button" class="iconbtn btn btn-outline-primary"></button>
            </div>
        </div>

        <div class="row border-top">
            <div class="col-2 py-1 d-flex justify-content-around border-right">
                <button type="button" class="iconbtn btn btn-outline-success"></button>
                <button type="button" class="iconbtn btn btn-outline-success"></button>
                <button type="button" class="iconbtn btn btn-outline-danger"></button>
                <button type="button" class="iconbtn btn btn-outline-danger"></button>
            </div>

            <div class="framebox-container col-10 p-0 m-0">
                
            </div>
        </div>
    </footer>

    <img class="d-none">

    <script src="/jsscripts/editor/commanddescriptor.js"></script>
    <script src="/jsscripts/editor/animobj.js"></script>
    <script src="/jsscripts/editor/editor.js"></script>
    <script>
        function onWindowResize() {
            let headerHeight = document.querySelector("header").clientHeight;
            let footerHeight = document.querySelector("footer").clientHeight;

            let contentArea = document.querySelector("#editor-contentarea");
            contentArea.style.height = (window.innerHeight - 1 - (headerHeight + footerHeight)) + 'px';
        }

        addEventListener("resize", onWindowResize);
        addEventListener("load", () => {
            onWindowResize();
        })
    </script>
    <?php
        // Scripts
        include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/head/defaultscripts.php");
    ?>
    
</body>
</html>