@extends('layouts.app')

@section('content')
    <div class="form-body center-block">
        <div class="row">
            <div class="col-md-10 center-block">
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
                                       class="glyphicon glyphicon-edit fa-2x ">
                                    </a>
                                    @if(Auth::user()->id != $student->id)
                                        <a href="{{ route('users.edit', $student->id) }}" title="Eliminar Alumno"
                                           class="glyphicon glyphicon-trash fa-2x text-danger pull-right">

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
    <script type="application/javascript">
        $(document).ready(function(){
            $(".home, .users, .studentsonly, .reports").css("background-color","transparent")
            $(".students").css("background-color", "cyan");
        });
    </script>
@endsection