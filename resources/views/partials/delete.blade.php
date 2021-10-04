<!-- Modal -->
<div class="modal fade" id="deleteItemModal" tabindex="-1" role="dialog" aria-labelledby="deleteItemModalLabel" aria-hidden="true">
    <div class="modal-dialog text-center" role="document">
        <div class="modal-content">
        
            <div class="float-right pr-2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        
        {!! Form::open(["url" => "/dashboard", 'method' => 'delete', 'class' => 'mb-2']) !!}

            {!! Form::hidden('id', null, ['class'=>'form-control', 'id'=>'delete-item-id']) !!}

            <p class=""><i style="font-size: 5em;" class="fas fa-trash text-danger"></i></p>
            <h5 style="margin-top:-2%; color: rgb(46, 46, 46)">Delete</h5>
            Are you sure you want to delete this item record?
            <h6 id="item-name"></h6>
            <div class="d-inline mt-1">
                <button type="submit" class="btn btn-danger px-4 mr-2">YES</button>
                <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-info px-4 ml-2">NO</button>
            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
<script>
    $(document).ready(function() {
        $(document).on('click', "#delete-item", function() {
            $(this).addClass('delete-item-trigger-clicked'); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

            var options = {
            'backdrop': 'static'
            };
            $('#deleteItemModal').modal(options)
        })

        $('#deleteItemModal').on('show.bs.modal', function() {
            var el = $(".delete-item-trigger-clicked"); // See how its usefull right here? 

            var id = el.data('item-id');
            var row = el.closest(".data-row");
            var name = row.children(".name").text();

            $("#item-name").text('#ID'+id + ' - ' + name);
            $("#delete-item-id").val(id);
        })
        $('#deleteItemModal').on('hide.bs.modal', function() {
            $('.delete-item-trigger-clicked').removeClass('delete-item-trigger-clicked')
            $("#item-name").text('');
        })
    })
</script>
<style>
.modal-header {
    border-bottom: 0 none;
}

.modal-footer {
    border-top: 0 none;
}
</style>