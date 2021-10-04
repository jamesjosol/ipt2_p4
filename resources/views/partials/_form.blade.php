<div class="form-group @error('name') has-error @enderror">
    {!! Form::label('name','Name',[],false) !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('name') }}</span>
</div> 
<div class="form-group @error('description') has-error @enderror">
    {!! Form::label('description', 'Description',[],false) !!}
    {!! Form::text('description', null, ['class'=>'form-control']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('description') }}</span>
</div> 
<div class="form-group @error('price') has-error @enderror">
    {!! Form::label('price', 'Price',[],false) !!}
    {!! Form::number('price', null, ['class'=>'form-control','step'=>'any']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('price') }}</span>
</div>
<div class="form-group @error('quantity') has-error @enderror">
    {!! Form::label('quantity', 'Quantity',[],false) !!}
    {!! Form::number('quantity', null, ['class'=>'form-control']) !!}
    <span class="errspan" id="errspan">{{ $errors->first('quantity') }}</span>
</div>