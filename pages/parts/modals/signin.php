<button type="button" class="btn btn-primary ml-2 no-user d-none" data-toggle="modal" data-target="#signInModal">Sign In</button>

<div id="signInModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h2 class="modal-title">Sign In</h2>
    <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
    </button>
</div>

<div class="modal-body">
    <?php
        $loginSuccess = (isset($loginSuccess)) ? $loginSuccess : true;
        if(!$loginSuccess) {
            $doc = new DOMDocument();
            $pTag = $doc->createElement("p");
            $pTag->setAttribute("class", "text-danger");
            $pTag->appendChild($doc->createTextNode("Username or password is incorrect"));
            $doc->appendChild($pTag);
            echo $doc->saveHTML();
        }
    ?>

    <form action="<?php echo str_replace("//", "/", $_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="text" class="form-control" name="signInEmail">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="password" class="form-control" name="signInPassword">
        </div>

        <input type="hidden" name="masterAction" value="signIn">
        <input type="submit" class="btn btn-success form-control" value="Sign In">
    </form>
</div>
</div>
</div>
</div>