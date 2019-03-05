<header class="container-fluid bg-dark">
    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/headers/masternav.php"); ?>
    <hr class="bg-light my-0">

    <div class="row">
        <span class="col-9 py-1">
            <?php
                include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/saveanimation.php");
                include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/loadanimation.php");
                include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/animationsettings.php");
            ?>
        </span>

        <span class="marquee-container border-left col-3 py-1 text-nowrap">
            <h1 id="animationTitle" class="text-white mb-1">Untitled Animation</h1> 
        </span>
    </div>
</header>