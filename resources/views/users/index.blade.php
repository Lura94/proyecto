@extends('layouts.app')

@section('content')
    <div class="form-body center-block">
        <div class="row">
            <div class="col-md-10 center-block">
                <div class="form-group">
                    <a href="{{URL('/users/create')}}" class="btn btn-primary pull-right" style="margin-bottom: 10px">
                        <li class="glyphicon glyphicon-plus"></li>
                        Nuevo usuario</a>
                </div>
                <table class="table table-bordered">
                    <thead>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">Telefono</th>
                    <th class="text-center">Rol</th>
                    <th class="text-center">email</th>
                    <th class="text-center">Operaciones</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        @if($user->roles->name == "Administrador")
                            <tr>
                                <td class="text-center">{{$user->name}}</td>
                                <td class="text-center">{{$user->phone}}</td>
                                <td class="text-center">{{$user->roles->name}}</td>
                                <td class="text-center">{{$user->email}}</td>
                                <td class="text-center">
                                    @if(Auth::user()->id != $user->id && Auth::user()->rolet != 1)
                                        <a href="{{ route('users.edit', $user->id) }}" title="Editar usuario"
                                           class="glyphicon glyphicon-edit fa-2x ">
                                        </a>
                                        <a data-toggle="modal" data-target="#exampleModal" data-name="{{$user->name}}"
                                           data-id="{{$user->id}}" title="Eliminar usuario"
                                           class="glyphicon glyphicon-trash fa-2x text-danger pull-right modalDelete">

                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
                {{$users->render()}}
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger">Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function(){
            $(".home, .students, .studentsonly, .reports").css("background-color","transparent")
            $(".users").css("background-color", "cyan");
        });
    </script>
@endsection


