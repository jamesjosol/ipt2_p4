@extends('base')

@section('content')

@include('partials.info_msg')

<div class="row mt-4">
    <div class="col-md-4 offset-md-4">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title font-weight-light"><i class="fas fa-lock"></i> User Login</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['url'=>'/login', 'method'=>'post']) !!}
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
                    <div class="form-group text-center">
                        <button class="btn btn-primary" id="actionBtn" onclick="btnload()" type="submit"><i class="fas fa-sign-in"></i> Login</button>
                    </div>
                {!! Form::close() !!}
            </div>
            
        </div>
    </div>
</div>

@stop 