@extends('layouts.app')
@section('content')
    <div class="row">


        <div class="col-md-10 center-block">
            <div class="form-group row center-block">
                {!! Form::open(['route' => 'students.store', 'method' => 'POST']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <div class="form-group row">
                {!!Form::label('rol_id','Numero de control:',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('ncontrol',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Nombre:',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('name',null,['class'=>'form-control'])!!}
                </div>
            </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Telefono:',['class' => 'col-md-2 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('phone',null,['class'=>'form-control'])!!}
                    </div>
                </div>
                <input type="hidden" name="id_rollet" value="2">
            <div class="form-group row">
                {!!Form::label('rol_id','Correo:',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('email',null,['class'=>'form-control'])!!}
                </div>
            </div>
                <div class="form-group row">
                    <label for="password" class="col-md-2 control-label">Contraseña:</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Curp:',['class' => 'col-md-2 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('curp',null,['class'=>'form-control'])!!}
                    </div>
                </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Grupo:',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('grup',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Grado:',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('grade',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Especialidad:',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('specialty',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('','',['class' => 'col-md-2 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                    {!! Form::close() !!}
                    <a href="{{URL('/students')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

@endsection