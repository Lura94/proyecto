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
  


<h3 style="text-align: center;" >
    Ingresar los datos del Administrador
  </h3>
<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="nControl" style="font-size: 16px;">Numero de Control:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nControl" placeholder="Ej.1307003045321">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="nombre">Nombre:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="nombre" placeholder="Ej. Jose Garcia Lopez">
    </div>
    <br>
  <div class="form-group">
    <label class="control-label col-sm-2" for="direccion">Direccion:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="direccion" placeholder="Ej. Av. Francisco I madero #100">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="telefono">Telefono:</label>
    <div class="col-sm-6">
      <input type="number" class="form-control" id="telefono" placeholder="Ej. 7676720000">
    </div>
  </div>
  </div><div class="form-group">
    <label class="control-label col-sm-2" for="email">Correo Electronico:</label>
    <div class="col-sm-6">
      <input type="email" class="form-control" id="email" placeholder="Ej. 0000000000000000">
    </div>
  </div><div class="form-group">
    <label class="control-label col-sm-2" for="puesto">Puesto:</label>
    <div class="col-sm-6">
      <input type="text" class="form-control" id="puesto" placeholder="Ej. Administrador">
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
      <button type="submit" class="btn-danger" style="margin-left: 50%">Cancelar</button>
    </div>
  </div>
</form>
  
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>