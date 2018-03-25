@extends('layouts.app')
@section('content')
    <div class="row">

        <div class="col-md-10 center-block">
            <div class="form-group row center-block">
                {!! Form::open(['route' => 'users.store', 'method' => 'POST']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
                <div class="form-group row">
                    {!!Form::label('rol_id','Nombre:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('name',null,['class'=>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('email','Correo:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::email('email',null,['class'=>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-1 control-label">Contraseña:</label>
                    <div class="col-sm-8">
                        <input type="password" name="password" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Rol:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        <select name="id_rollet" class="bs-select form-control person"  id="roles_id" required="true">
                            <option value="0" disabled selected>Selecciona una opción...</option>
                            @foreach($roles as $role)
                                <option value="{{$role->id_rollet}}">{{$role->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Telefono:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('phone',null,['class'=>'form-control'])!!}
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