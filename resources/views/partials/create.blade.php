<div class="modal fade" id="createItemModal" tabindex="-1" role="dialog" aria-labelledby="createItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="createItemModalLabel"><i class="fas fa-plus-circle"></i> Add Item</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(["url" => "/dashboard", 'method' => 'post']) !!}
            @include('partials._form')
            <div class="form-group">
                <button class="btn btn-primary" id="actionBtn" onclick="btnload()">Add Item</button>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script type="text/javascript">
@if (count($errors) > 0)
    $('#createItemModal').modal('show');
@endif
</script>