@section('mytitle', '| Register')

@extends('base')

@section('content')
    
<div class="row mt-4">
    <div class="col-md-4 offset-md-4">
        <div class="card mb-3">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title font-weight-light"><i class="fa fa-user"></i> User Registration</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['url'=>'/register', 'method'=>'post']) !!}
                    <div class="form-group _auth @error('name') has-error @enderror">
                        {!! Form::label('name','<i class="far fa-user"></i>Name',[],false) !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group _auth @error('email') has-error @enderror">
                        {!! Form::label('email','<i class="fas fa-at"></i> Email',[],false) !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('email') }}</span>
                    </div>
                    <div class="form-group _auth @error('password') has-error @enderror">
                        {!! Form::label('password', '<i class="fas fa-key"></i> Password',[],false) !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password') }}</span>
                    </div>
                    <div class="form-group _auth @error('password_confirmation') has-error @enderror">
                        {!! Form::label('password_confirmation', '<i class="fas fa-key"></i> Confirm Password',[],false) !!}
                        {!! Form::password('password_confirmation', ['class'=>'form-control']) !!}
                        <span class="errspan" id="errspan">{{ $errors->first('password_confirmation') }}</span>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary" onclick="btnload()" id="actionBtn" type="submit">Register</button>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@stop