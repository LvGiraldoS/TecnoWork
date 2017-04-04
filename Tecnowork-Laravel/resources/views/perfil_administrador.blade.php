@Extends ('layout.master')
@Section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/estilosPerfil.css" type="text/css">
</head>
<body>

    <div class="contenedorADM">
    		
    
   	  <div class="contenedorInternoADM" align="center">
   	    <img src="imagenes/LogoADM.png" alt="LOGO SENA" height="446"/>

   	    <div class="botonesADM" align="center">
          <table border="0">
          <tr>
            <td><a href="listar"><img src="imagenes/imgBotonListarADM.png" alt="IconoListar" width="100" height="96" /></a></td>
            <td><a href="agregar"><img src="imagenes/imgBotonAgregarADM.png" alt="IconoAgregar" width="100" height="96" /></a></td>
            <td><a href="index"><img src="imagenes/ImgBotonCerrarsesionADM.png" alt="IconoCerrarsesion" width="103" height="102" /></a></td>
          </tr>
        </table>
        </div>
      </div>
    </div>    
  
</body>
</html>
@endsection