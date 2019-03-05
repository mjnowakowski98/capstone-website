<?php
    $publishedOnly = isset($publishedOnly) ? $publishedOnly : true;

    include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/animationsearch.php");
?>

<div class="container">
    <div class="row mb-2">
        <div class="col">
            <form action="<?php echo str_replace("//", "/", $_SERVER["PHP_SELF"]); ?>" method="GET">
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Title</span>
                    </div>
                    <input type="text" class="form-control" name="searchTitle">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" name="searchTitleCB">
                        </div>
                    </div>
                </div>

                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Uploader</span>
                    </div>
                    <input type="text" class="form-control" name="searchUser">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <input type="checkbox" name="seachUserCB">
                        </div>
                    </div>
                </div>
                
                <div class="input-group mb-2">
                    <input type="date" class="form-control" name="searchDate">
                </div>

                <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/forms/preservegetinput.php"); ?>
                <input type="hidden" name="masterAction" value="searchAnimations">
                <input type="submit" class="btn btn-success form-control" value="Search">
            </form>
        </div>
    </div>

    <div class="search-results row d-none">
        <div class="col">
            <div class="list-group list-group-flush">
                <?php // Get search results from db here ?>
                <button type="button" class="list-group-item list-group-item-action">Test</button>
                <button type="button" class="list-group-item list-group-item-action">Test2</button>
            </div>
        </div>
    </div>
</div>