<header class="container bg-dark">
    <nav class="row navbar navbar-dark bg-dark">
        <div class="col-2 d-flex flex-row">
            <button type="button" class="btn navbar-brand">JAE</button>
            <a href="/pages/index.php" class="btn btn-primary">Home</a>
        </div>

        <div class="col d-flex justify-content-end">
            <a href="/editor.php" class="btn btn-primary ml-2 no-user basic-user">Editor</a>
            <a href="/userprofile.php" class="btn btn-primary ml-2 basic-user">Profile</a>
            <a href="/useranimations.php" class="btn btn-primary ml-2 basic-user">My Animations</a>
            <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/signup.php"); ?>
            <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/signin.php"); ?>
        </div>
    </nav>
</header>