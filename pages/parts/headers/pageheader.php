<header class="container bg-dark">
    <nav class="row navbar navbar-dark">
        <div class="col-2 d-flex flex-row">
            <a href="/" class="btn btn-success navbar-brand">JAE</a>
        </div>

        <div class="col d-flex justify-content-end">
            <a href="/editor.php" class="btn btn-primary ml-2 no-user basic-user d-none">Editor</a>
            <a href="/userprofile.php" class="btn btn-primary ml-2 basic-user d-none">Profile</a>
            <a href="/useranimations.php" class="btn btn-primary ml-2 basic-user d-none">My Animations</a>
            <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/signup.php"); ?>
            <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/modals/signin.php"); ?>
            <a href="/usermanagement.php" class="btn btn-primary ml-2 admin-user d-none">User Management</a>
            <a href="?masterAction=signOut" class="btn btn-secondary ml-2 basic-user admin-user d-none">Sign Out</a>
        </div>
    </nav>
</header>