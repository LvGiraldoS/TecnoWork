@extends ('layout.master')
@section ('content')

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    <link rel="stylesheet" href="css/HojaEstilos.css" type="text/css" />
</head>

<body class="bodyInicioSesion">

  <div class="divimgInicioSesion">
      <img src="imagenes/imgLogoInicioSesion.png" class="imgInicioSesion">
  </div>

  <div class="divformInicioSesion">  
      
      <form class="form" method="POST" action="login">
       {!! csrf_field() !!}
        <p>
          <label for="correo_electronico" class="usuario">Usuario (Correo Registrado):</label>
          <input type="text" name ="email" placeholder="Escribe tu correo" required></input>  
          <label for="contraseña" class="contraseña" name ="contraseña">Contraseña:</label>
          <input type="password" name="password" id="contraseña" placeholder="Escribe tu contraseña" required></input> 
          <input type="submit" name="enviar" value="Iniciar Sesión">
        </p>
        <p align="center"><img src="imagenes/imgBotInicio.png" width="47" height="44" /> </p>       

      </form>
  </div>  

</body>
</html>

@endsection