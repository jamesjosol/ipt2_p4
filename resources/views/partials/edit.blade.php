
  <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="edit-modal-label"><i class="fas fa-edit"></i> Edit Item</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            {!! Form::open(["url" => "/dashboard", 'method' => 'patch', 'id' => 'edit-form']) !!}

            {!! Form::hidden('id', null, ['class'=>'form-control', 'id'=>'modal-input-id']) !!}
            <div class="form-group">
                {!! Form::label('name','Name',[],false) !!}
                {!! Form::text('name', null, ['class'=>'form-control', 'id'=>'modal-input-name', 'required' => 'required']) !!}
            </div> 
            <div class="form-group">
                {!! Form::label('description', 'Description',[],false) !!}
                {!! Form::text('description', null, ['class'=>'form-control', 'id'=>'modal-input-description', 'required' => 'required']) !!}
            </div> 
            <div class="form-group">
                {!! Form::label('price', 'Price',[],false) !!}
                {!! Form::number('price', null, ['class'=>'form-control', 'step'=>'any', 'id'=>'modal-input-price', 'required' => 'required']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('quantity', 'Quantity',[],false) !!}
                {!! Form::number('quantity', null, ['class'=>'form-control', 'id'=>'modal-input-quantity', 'required' => 'required']) !!}
            </div>
     
            <div class="form-group">
                <button class="btn btn-primary" id="actionBtn" onclick="btnload()" type="submit">Edit Item</button>
            </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {

        $(document).on('click', "#edit-item", function() {
            $(this).addClass('edit-item-trigger-clicked');

            var options = {
            'backdrop': 'static'
            };
            $('#edit-modal').modal(options)
        })

        // on modal show
        $('#edit-modal').on('show.bs.modal', function() {
            var el = $(".edit-item-trigger-clicked"); 
            var row = el.closest(".data-row");

            var id = el.data('item-id');
            var name = row.children(".name").text();
            var description = row.children(".description").text();
            var price = row.children(".price").text();
            var quantity = row.children(".quantity").text();

            $("#modal-input-id").val(id);
            $("#modal-input-name").val(name);
            $("#modal-input-description").val(description);
            $("#modal-input-price").val(price);
            $("#modal-input-quantity").val(quantity);

        })

        $('#edit-modal').on('hide.bs.modal', function() {
            $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
            $("#edit-form").trigger("reset");
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