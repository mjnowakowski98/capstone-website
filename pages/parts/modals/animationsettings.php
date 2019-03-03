<button type="button" class="iconbtn btn btn-outline-primary my-2" data-toggle="modal" data-target="#animationSettingsModal"></button>

<div id="animationSettingsModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h2 class="modal-title">Animation Settings</h2>
    <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
    </button>
</div>

<div class="modal-body">
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text">Background Color</span>
        </div>
        <input type="color" class="form-control animation-backgroundcolor">
    </div>

    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text">Frames/Second</span>
        </div>
        <input type="number" class="form-control animation-framespersecond">
    </div>

    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text">Width</span>
        </div>
        <input type="number" class="form-control animation-width">
    </div>

    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text">Height</span>
        </div>
        <input type="number" class="form-control animation-height">
    </div>
    <hr>

    <h3>Advanced</h3>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
            <span class="input-group-text">Engine Instance</span>
        </div>
        <input type="text" class="form-control" value="ws://localhost/">
    </div>
</div>
</div>
</div>
</div>