<button type="button" class="iconbtn btn btn-outline-primary my-2" data-toggle="modal" data-target="#loadAnimationModal"></button>

<div id="loadAnimationModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h2 class="modal-title">Load Animation</h2>
    <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
    </button>
</div>

<div class="modal-body">
    <div class="form-group">
        <div class="form-check form-check-inline">
            <input type="radio" id="loadFromFile" class="form-check-input" name="loadMode" value="file" checked>
            <label class="form-check-label" for="loadFromFile">From file</label>
        </div>

        <div class="form-check form-check-inline">
            <input type="radio" id="loadFromServer" class="form-check-input" name="loadMode" value="server">
            <label class="form-check-label" for="loadFromServer">From Server</label>
        </div>
    </div>

    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Title</span>
        </div>
        <input type="text" id="loadAnimationTitle" class="form-control" name="animationTitle">
        <div class="input-group-append">
            <button type="button" id="loadAnimation" class="btn btn-success" data-dismiss="modal">Load</button>
        </div>
    </div>
    <hr>

    <?php include_once($_SERVER["DOCUMENT_ROOT"] . "/pages/parts/forms/animationbrowser.php"); ?>
</div>
</div>
</div>
</div>