@extends('layouts.app')

@section('content')
    <div class="form-body center-block">
        <div class="row">
            <div class="col-md-10 center-block">
                @include('alerts.success')
                <div class="form-group">
                    <a href="{{URL::to('reports/exportAll')}}" title="Exportar" class="btn btn-primary pull-right" style="margin-left: 10px">Exportar</a>
                    <a href="{{URL('/reports/create')}}" title="Nuevo reporte" class="btn btn-primary pull-right" style="margin-bottom: 10px">
                        <li class="glyphicon glyphicon-plus"></li>
                        Nuevo reporte</a>
                    {{Form::open(["route" => "reports.filter", "method" => "POST"])}}
                    <input type="text" name="filter" class="control-label" id="filter" placeholder="Filtrar Por Profesor">
                    <button type="submit"  class="btn btn-primary" style="margin-left: 10px">Aplicar Filtro</button>
                    {{Form::close()}}
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
                                <a href="{{ route('reports.edit',$report->id) }}" title="Editar Reporte"
                                   class="btn glyphicon glyphicon-edit fa-2x ">
                                </a>
                                <a href="#exampleModal" data-toggle="modal"
                                   data-id="{{ $report->id }}" title="Eliminar"
                                   class="btn glyphicon glyphicon-trash fa-2x text-danger pull-right modalDelete">
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
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Reporte</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyDelete">

                </div>
                <div class="modal-footer">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                    <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="deleteReport()">Aceptar
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">

        $(document).ready(function(){
            $(".home, .students, .studentsonly, .users").css("background-color","transparent")
            $(".reports").css("background-color", "rgb(135,224,253)");


        });

        $(".modalDelete").click(function () {
            id = $(this).data("id");
            var nodeName = document.createElement("p");
            var nameNode = document.createTextNode("¿Seguro que desea eliminar el reporte ?");
            nodeName.appendChild(nameNode);
            $("#bodyDelete").empty();
            document.getElementById("bodyDelete").appendChild(nodeName);
        });

        function deleteReport() {
            var user_id = id;
            var token = $("#token").val();

            $.ajax({
                url: "reports/" + user_id + "",
                headers: {"x-CSRF-TOKEN": token},
                type: "DELETE",
                success: function () {
                    window.location = "/reports";
                    $("#message").fadeIn();
                }
            });
        }


    </script>
    
@endsection
