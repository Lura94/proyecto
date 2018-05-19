@extends('layouts.app')
@section('content')
    <div class="row">


        <div class="col-md-10 center-block">
            <div class="form-group row center-block">
                <div class="center-block">@include('alerts.request')</div>
                {!! Form::model($report,['route' => ['reports.update',$report->id_report], 'method' => 'PUT']) !!}
                <input type="hidden" value="{{csrf_token()}}">
                <div class="form-group row">
                    {!!Form::label('rol_id','Alumno:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        <select name="id_student" id="" class="form-control">
                            @foreach($students as $student)
                                @if($student->roles->name == "Alumno")
                                    <option value="{{$student->id}}" {{isset($report)?($report->id_student == $student->id)?'selected':'':''}}>{{$student->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Profesor:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('name_teacher',null,['class'=>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Razon:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('reason',null,['class'=>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Descripcion:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('description',null,['class'=>'form-control'])!!}
                    </div>
                </div>
                <div class="form-group row">
                    {!!Form::label('rol_id','Horas:',['class' => 'col-md-1 col-form-label'])!!}
                    <div class="col-md-8">
                        {!!Form::text('signed_hour',null,['class'=>'form-control'])!!}
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