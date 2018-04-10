@extends('layouts.app')

@section('content')
    <div class="row">

        <div class="col-md-10 center-block">
            <div class="form-group row center-block">

                <div class="form-group row">
                    {!!Form::label('rol_id','Numero de control:',['class' => 'col-md-2 col-form-label',])!!}
                    <div class="col-md-10">
                        <div class="col-md-3">
                            {!!Form::text('ncontrol',null,['class'=>'form-control','placeholder' => '1307003030'])!!}
                        </div>
                       <div class="col-md-2">
                           {!!Form::button('Aceptar',['class' => 'btn btn-primary'])!!}
                       </div>
                        <div class="col-md-3">
                            <div class="form-group row">
                            {!!Form::label('rol_id','Horas deuda:',['class' => 'col-md-6 col-form-label'])!!}
                            <div class="col-md-5">
                                {!!Form::text('ncontrol',null,['class'=>'form-control','readonly'])!!}
                            </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row">
                    <table class="table table-bordered">
                        <thead>
                        <th class="text-center">Razon</th>
                        <th class="text-center">Descripcion</th>
                        <th class="text-center">Horas</th>
                        <th class="text-center">Fecha de reporte</th>
                        </thead>
                        <tbody>
                        @foreach($reports as $report)
                        <tr>
                            <td class="text-center">{{$report->reason}}</td>
                            <td class="text-center">{{$report->description}}</td>
                            <td class="text-center">{{$report->signed_hour}}</td>
                            <td class="text-center">{{$report->created_at}}</td>
                        </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection