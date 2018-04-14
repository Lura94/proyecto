@extends('layouts.app')

@section('content')
    <div class="form-body center-block">
        <div class="row">
            <div class="col-md-10 center-block">
                @include('alerts.success')
                <div class="form-group">
                    <a href="{{URL('/students/create')}}" class="btn btn-primary pull-right"
                       style="margin-bottom: 10px">
                        <li class="glyphicon glyphicon-plus"></li>
                        Nuevo Estudiante</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Curp</th>
                    <th class="text-center">Grado</th>
                    <th class="text-center">email</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Grupo</th>
                    <th class="text-center">Numero de control</th>
                    <th class="text-center">Especialidad</th>
                    <th class="text-center">Operaciones</th>
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                        @if($student->roles->name  != "Administrador")
                            <tr>
                                <td class="text-center">{{$student->name}}</td>
                                <td class="text-center">{{$student->curp}}</td>
                                <td class="text-center">{{$student->grade}}</td>
                                <td class="text-center">{{$student->email}}</td>
                                <td class="text-center">{{$student->phone}}</td>
                                <td class="text-center">{{$student->grup}}</td>
                                <td class="text-center">{{$student->ncontrol}}</td>
                                <td class="text-center">{{$student->specialty}}</td>
                                <td class="text-center">
                                    <a href="{{ route('students.edit', $student->id) }}" title="Editar Alumno"
                                       class="btn glyphicon glyphicon-edit fa-2x ">
                                    </a>
                                    @if(Auth::user()->id != $student->id)
                                        <a href="#exampleModal" data-toggle="modal" data-name="{{ $student->name }}"
                                           data-id="{{ $student->id }}" title="Eliminar"
                                           class="btn glyphicon glyphicon-trash fa-2x text-danger pull-right modalDelete">
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                {{$students->render()}}
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Alumno</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="bodyDelete">

                </div>
                <div class="modal-footer">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="deleteStudent()">Aceptar</button>
                    <button type="button" class="btn btn-danger " data-dismiss="modal"></i>Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function(){
            $(".home, .users, .studentsonly, .reports").css("background-color","transparent")
            $(".students").css("background-color", "cyan");
        });

        $(".modalDelete").click(function(){
            id = $(this).data("id");
            var name = $(this).data("name");
            var nodeName=document.createElement("p");
            var nameNode=document.createTextNode("¿Seguro que desea eliminar el Alumno "+name+"?");
            nodeName.appendChild(nameNode);
            $("#bodyDelete").empty();
            document.getElementById("bodyDelete").appendChild(nodeName);
        });
        function deleteStudent() {
            var token = $("#token").val();
            var user_id = id;

            $.ajax({
                url: "students/"+id+"",
                headers: {'X-CSRF-TOKEN': token},
                type: "DELETE",
                success: function() {
                    window.location = "/students";
                    $("#message").fadeIn();
                }
            });

        }
    </script>
@endsection