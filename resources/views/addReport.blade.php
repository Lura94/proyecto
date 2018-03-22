<!DOCTYPE html>
<html lang="en" >
<head >
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.0-alpha16/css/tempusdominus-bootstrap-4.min.css" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.8.1/combined/css/gijgo.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../css/estilos.css">




  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/dist/jquery-clockpicker.js">








  <meta charset="UTF-8">
  <meta name="vieport">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  
  <title>Document</title>
   </head>
  <body>
    <h4 style="text-align: center">Agregar Reporte</h4>
    <nav class="navbar navbar-expand-lg navbar-info" style="background-color: #e3f2fd;">
  

<ul class="navbar-nav">
     <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="navbar-brand" href="principalAlumnos.html">
      <img src="inicio.svg" height="30" width="30" class="d-inline-block align-top" >
     </a>

    </li>
  </ul>
</ul>
<hr>
<ul class="nav justify-content-end">
  <li class="nav-item">
    <a class="nav-link active" href="login">Cerrar Sesión</a>
  </li>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <form class="form-inline my-2 my-lg-0">
</ul>
  </form>
  </div>

</nav>



 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">N° Control Alumno</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
  </div>

 <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Nombre del Docente</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
  </div>

   <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Motivo</label>
      <input type="text" class="form-control" id="inputCity">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Motivo</label>
      <textarea type="text" class="form-control" id="inputCity"></textarea>
  </div>
    </div>
   <div class="form-row">
    <div class="form-group col-md-3">
      <label>Fecha</label>
      <input id="datepicker" />
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>   
     </div>
    <div class="form-group col-md-3">
    <div class="form-row">
    <div class="form-group col-md-12">
        <div class="input-group clockpicker" data-placement="bottom" data-align="top" data-autoclose="true">
    <input type="text" class="form-control" value="13:14">
    <span class="input-group-addon">
        <span class="glyphicon glyphicon-time"></span>
    </span>
</div>
    </div>
  </div>

  




    </div>
  </div>





 
 

<div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn-success">Agregar</button>
      <button type="submit" class="btn-danger" style="margin-left: 50%">Cancelar</button>
    </div>
  </div>

    


  





















    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/dist/bootstrap-clockpicker.js"></script>
  <script type="text/javascript">
$('.clockpicker').clockpicker();
</script>



  </body>
</html>