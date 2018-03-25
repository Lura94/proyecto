<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cbta</title>

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css" integrity="sha384-v2Tw72dyUXeU3y4aM2Y0tBJQkGfplr39mxZqlTBDUZAb9BGoC40+rdFCG0m10lXk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/fontawesome.css" integrity="sha384-q3jl8XQu1OpdLgGFvNRnPdj5VIlCvgsDQTQB6owSOHWlAurxul7f+JpUOVdAiJ5P" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Cbta</a>
                </div>
                @if(!Auth::guest())
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <span class="username username-hide-on-mobile"> {!!Auth::user()->name!!} </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="{{ route('logout') }}" role="button" tabindex="0" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    <i class="icon-key"></i> Cerrar sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
                    @endif
            </div>
        </nav>
        @if(!Auth::guest())
        <nav class="navbar navbar-default sidebar" role="navigation" style="height: 650px;">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="/">Home<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                       @if(Auth::user()->id_rollet != "2")
                        <li ><a href="{{URL('/users')}}">Usuarios <span ></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
                        <li ><a href="{{URL('/students')}}">Alumnos<span style="font-size:16px;" class="pull-right hidden-xs showopacity  fa fa-graduation-cap"></span></a></li>
                        <li ><a href="{{URL('/reports')}}">Reportes<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-list"></span></a></li>
                       @endif
                        <li ><a href="{{route('students.show','1')}}">Vista de Alumnos<span style="font-size:16px;" class="pull-right hidden-xs showopacity fa fa-group"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        @endif
        @yield('content')

    </div>

    <!-- Scripts -->
    @yield('scripts')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
</body>
</html>
