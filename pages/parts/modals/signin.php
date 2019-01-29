<button type="button" class="btn btn-primary ml-2 no-user" data-toggle="modal" data-target="#signInModal">Sign In</button>

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
    <form action="#" method="POST">
        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Username</span>
            </div>
            <input type="text" class="form-control" name="signInUserName">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="text" class="form-control" name="signInPassword">
        </div>

        <input type="submit" class="btn btn-success form-control" value="Sign Up">
    </form>
</div>
</div>
</div>
</div>