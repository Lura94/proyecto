@extends('layouts.app')

@section('content')
    <div class="form-body center-block">
        <div class="row">
            <div class="col-md-10 center-block">
                <div class="form-group">
                    <a href="{{URL('/reports/create')}}" class="btn btn-primary pull-right" style="margin-bottom: 10px"><li class="glyphicon glyphicon-plus"></li> Nuevo reporte</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <th class="text-center">Alumno</th>
                    <th class="text-center">Profesor</th>
                    <th class="text-center">Razon</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Horas</th>
                    <th class="text-center">Fecha de reporte</th>
                    <th class="text-center">Operaciones</th>
                    </thead>
                    <tbody>
                    @foreach($reports as $report)
                        <tr>
                            <td class="text-center">{{$report->user->name}}</td>
                            <td class="text-center">{{$report->name_teacher}}</td>
                            <td class="text-center">{{$report->reason}}</td>
                            <td class="text-center">{{$report->description}}</td>
                            <td class="text-center">{{$report->signed_hour}}</td>
                            <td class="text-center">{{$report->created_at}}</td>
                            <td class="text-center">
                                <a href="{{ route('users.edit', $report->id) }}" title="Editar usuario"
                                   class="glyphicon glyphicon-edit fa-2x ">
                                </a>
                                <a href="{{ route('users.edit', $report->id) }}" title="Eliminar usuario"
                                   class="glyphicon glyphicon-trash fa-2x text-danger pull-right">

                                </a>
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
                {{$reports->render()}}
            </div>
        </div>
    </div>
@endsection
