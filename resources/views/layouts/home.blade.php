@extends('layouts.app')

@section('content')

    <div class="form-group">
        <div class="form-control report"><a href="/reports"><i title="Reportes" class="fa fa-list-alt fa-3x"></i><p style="background-color:#52BAEA;width:275px;position: relative;top: 22px;right: 12px;color: rgb(20,20,20);">Reportes</p></a></div>
        <div class="form-control alumn"><a href="/students"><i title="Alumnos" class="fa fa-graduation-cap fa-3x"></i><p style="background-color:#52BAEA;width:275px;position: relative;top: 22px;right: 12px;color: rgb(20,20,20);">Alumnos</p></a></div>
        <div class="form-control user"><a href="/users"><i title="Reportes" class="fa fa-users fa-3x"></i><p style="background-color:#52BAEA;width:275px;position: relative;top: 22px;right: 12px;color: rgb(20,20,20);">Usuarios</p></a></div>
    </div>
    @endsection