<?php include_once($_SERVER["DOCUMENT_ROOT"] . "/scripts/animationsearch.php"); ?>

<div class="container">
    <div class="row mb-2">
        <div class="col">
            <form action="#" method="POST">
                <input type="text" class="form-control" name="searchTitle">
                <input type="hidden" name="masterAction" value="searchAnimations">
                <input type="submit" class="btn btn-primary form-control" value="Search">
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="list-group list-group-flush">
                <?php // Get search results from db here ?>
                <button type="button" class="list-group-item list-group-item-action">Test</button>
                <button type="button" class="list-group-item list-group-item-action">Test2</button>
            </div>
        </div>
    </div>
</div>