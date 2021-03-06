@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-md-10 center-block">
            <div class="form-group row center-block">
              <div class="center-block">@include('alerts.request')</div>
                {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <div class="form-group row">
                    {!!Form::label('rol_id','Nombre:',['class' => 'col-md-1 col-form-label'])!!}
                    
                    <div class="col-md-8">
                        
                        {!!Form::text('name',null,['class'=>'form-control', 'required'=>'required','placeholder' => ' Jorge Pérez García'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('email','Correo:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('email',null,['class'=>'form-control', 'required'=>'required','placeholder' => 'usuario@gmail.com'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-1 control-label">Contraseña:</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <input type="hidden" name="id_rollet" value="1">
                <div class="form-group row">
                    {!!Form::label('rol_id','Telefono:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('phone',null,['class'=>'form-control','placeholder' => '7676724086'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('','',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!! Form::submit('Guardar',['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                        <a href="{{URL('/users')}}" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection