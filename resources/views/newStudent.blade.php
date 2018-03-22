<!DOCTYPE html>
<html lang="en" >
<head >
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/estilos.css">

	<meta charset="UTF-8">
	<meta name="vieport">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<title>Document</title>
	
	
</head>
<body id="logeo">
  

<nav class="container">
<h3 style="text-align: center;" >
    Agregar Alumno
  </h3>
<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nControl">Numero de Control:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nControl" placeholder="Ej.1307003045321">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nombre">Nombre:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nombre" placeholder="Ej. Jose">
    </div>
    <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="APaterno">Apellido Paterno:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="APaterno" placeholder="Ej. Garcia">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="AMaterno">Apellido Materno:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="AMaterno" placeholder="Ej. Lopez">
    </div>
  </div>
  </div><div class="form-group">
    <label class="control-label col-sm-2" for="gradp">Grado:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="grado" placeholder="Ej. I">
    </div>
  </div><div class="form-group">
    <label class="control-label col-sm-2" for="puesto">Especialidad:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="especialidad" placeholder="Ej. Agropecuario">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="grupo">Grupo:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="grupo" placeholder="Ej. A">
    </div>
    <div class="form-group">
    <label class="control-label col-sm-2" for="puesto">Curp:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="curp" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="horasTotales">Horas Totales:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="horasTotales" placeholder="Ej. 15">
    </div>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
    <div class="col-sm-6"> 
      <input type="password" class="form-control" id="pwd" placeholder="**************">
    </div>
  </div>

   <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn-success">Agregar</button>
      <button type="submit" class="btn-danger" id="cancelar" >Cancelar</button>
    </div>
  </div>
</form>
</nav>
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>