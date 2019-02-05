<button type="button" class="btn btn-primary ml-2 no-user d-none" data-toggle="modal" data-target="#signUpModal">Sign Up</button>

<div id="signUpModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h2 class="modal-title">Sign Up</h2>
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
            <input type="text" class="form-control" name="signUpUserName">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Email</span>
            </div>
            <input type="text" class="form-control" name="signUpEmail">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Confirm email</span>
            </div>
            <input type="text" class="form-control" name="signUpUConfirmEmail">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Password</span>
            </div>
            <input type="text" class="form-control" name="signUpPassword">
        </div>

        <div class="input-group mb-1">
            <div class="input-group-prepend">
                <span class="input-group-text">Confirm password</span>
            </div>
            <input type="text" class="form-control" name="signUpConfirmPassword">
        </div>

        <input type="submit" class="btn btn-success form-control" value="Sign Up">
    </form>
</div>
</div>
</div>
</div>