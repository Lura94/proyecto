@extends('layouts.app')

@section('content')
    <div class="form-body center-block">
        <div class="row">
            <div class="col-md-10 center-block">
                @include('alerts.success')
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
                                           class="btn glyphicon glyphicon-edit fa-2x ">
                                        </a>

                                        <a href="#exampleModal" data-toggle="modal" data-name="{{ $user->name }}"
                                           data-id="{{ $user->id }}" title="Eliminar"
                                           class="btn glyphicon glyphicon-trash fa-2x text-danger pull-right modalDelete">
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
                <div class="modal-body" id="bodyDelete">

                </div>
                <div class="modal-footer">
                    <input type="hidden" value="{{csrf_token()}}" name="_token" id="token">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="deleteUser()">Aceptar</button>
                    <button type="button" class="btn btn-danger " data-dismiss="modal"></i>Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <script type="application/javascript">
        $(document).ready(function(){
            $(".home, .students, .studentsonly, .reports").css("background-color","transparent")
            $(".users").css("background-color", "rgb(135,224,253)");
        });

        $(".modalDelete").click(function(){
            id = $(this).data("id");
            var name = $(this).data("name");
            var nodeName=document.createElement("p");
            var nameNode=document.createTextNode("¿Seguro que desea eliminar el usuario "+name+"?");
            nodeName.appendChild(nameNode);
            $("#bodyDelete").empty();
            document.getElementById("bodyDelete").appendChild(nodeName);
        });
        function deleteUser() {
                var token = $("#token").val();
                var user_id = id;

                $.ajax({
                    url: "users/"+id+"",
                    headers: {'X-CSRF-TOKEN': token},
                    type: "DELETE",
                    success: function() {
                        window.location = "/users";
                        $("#message").fadeIn();
                    }
                });

        }
    </script>
@endsection


