<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Documento sin título</title>
    <link rel="stylesheet" href="HojaEstilos.css" type="text/css" />
</head>

<body class="bodyInicioSesion">

  <div class="divimgInicioSesion">
      <img src="imgLogoInicioSesion.png" class="imgInicioSesion">
  </div>

  <div class="divformInicioSesion">  
      
      <form class="form" action="PerfilCliente.php">
        <p>
          <label for="correoUsuario" class="usuario">Usuario (Correo Registrado):</label>
          <input type="text" id="correoUsuario" placeholder="Escribe tu correo"></input>  
          <label for="contraseña" class="contraseña">Contraseña:</label>
          <input type="password" id="contraseña" placeholder="Escribe tu contraseña"></input> 
          <input type="submit" name="enviar" value="Iniciar Sesión">
        </p>
        <p align="center"><a href="Index.php"><img src="imgBotInicio.png" width="47" height="44" /></a> </p>       

      </form>
  </div>  

</body>
</html>