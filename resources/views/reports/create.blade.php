@extends('layouts.app')
@section('content')
    <div class="row">


        <div class="col-md-10 center-block">
            <div class="form-group row center-block">
                {!! Form::open(['route' => 'reports.store', 'method' => 'POST']) !!}
                <input type="hidden" value="{{csrf_token()}}">
                <div class="form-group row">
                {!!Form::label('rol_id','Alumno:',['class' => 'col-md-1 col-form-label'])!!}
                <div class="col-md-8">
                    <select name="id_student" id="" class="form-control">
                        <option value="0" disabled selected>Selecciona una opcion</option>
                        @foreach($students as $student)
                            @if($student->roles->name == "Alumno")
                            <option value="{{$student->id}}">{{$student->name}}</option>
                            @endif
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Profesor:',['class' => 'col-md-1 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('name_teacher',null,['class'=>'form-control','required'=>'required','placeholder' => 'Ing. Frumencio Carranza Lorenzo'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Razón:',['class' => 'col-md-1 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('reason',null,['class'=>'form-control','required'=>'required','placeholder' => 'Honores a la Bandera'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Descripcion:',['class' => 'col-md-1 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('description',null,['class'=>'form-control','required'=>'required','placeholder' => 'El alumno estaba haciendo desorden en honores a la bandera '])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('rol_id','Horas:',['class' => 'col-md-1 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::text('signed_hour',null,['class'=>'form-control','required'=>'required','placeholder' => '5'])!!}
                </div>
            </div>
            <div class="form-group row">
                {!!Form::label('','',['class' => 'col-md-1 col-form-label'])!!}
                <div class="col-md-8">
                    {!!Form::submit('Guardar',['class' => 'btn btn-primary'])!!}
                    <a href="{{URL('/reports')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>

@endsection