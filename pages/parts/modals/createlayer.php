<button type="button" class="iconbtn btn btn-outline-primary my-2" data-toggle="modal" data-target="#createLayerModal"></button>

<div id="createLayerModal" class="modal fade" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
    <h2 class="modal-title">New Layer</h2>
    <button type="button" class="close" data-dismiss="modal">
        <span>&times;</span>
    </button>
</div>

<div class="modal-body">
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text">Name</span>
        </div>
        <input type="text" id="newLayerName" class="form-control" value="New Layer">
        <div class="input-group-append">
            <button type="button" id="createLayer" class="btn btn-success" data-dismiss="modal">Create</button>
        </div>
    </div>
    <hr>

</div>
</div>
</div>
</div>