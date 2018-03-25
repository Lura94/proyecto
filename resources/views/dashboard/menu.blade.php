@extends('layouts.app')

@section('content')
<div class="p1">


    <a class="pp1 item" href="http://google.com"><i class="fas fa-users"></i><span class="menuicon">Usuarios</span></a>
    <a class="pp2 item"><i class="fas fa-graduation-cap"></i><span class="menuicon">Alumnos</span></a>
    <a class="pp3 item"><i class="fas fa-address-book"></i><span class="menuicon">Reportes</span></a>



</div>

<section class="context">
    <div class="clos">
        <a class="usuarios separate"><i class="fas fa-users fa-4x"></i><span class="iconos">Usuarios</span></a>
        <div class="alumnos separate"><i class="fas fa-graduation-cap fa-4x"></i><span class="iconos">Alumnos</span></div>
        <div class="reportes separate"><i class="fas fa-address-book fa-4x repo"></i><span class="iconos">Reportes</span></div>
    </div>
</section>
<footer>

    <div class="pie">

        <p class="creditos">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia delectus dolor eum harum cupiditate voluptates numquam, ipsam sequi consequatur, aperiam dicta molestiae, perspiciatis assumenda quasi sunt tempora quisquam quod id!</p>

    </div>

</footer>

    @endsection