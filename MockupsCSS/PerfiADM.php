<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="estilosPerfil.css" type="text/css">
</head>
<body>

    <div class="contenedorADM">
    		<div id="menuPerfilADM">
                <table width="150px"  align="right"  height="27" border="0" >
                  <tr>
                   
                    <td  class="menuPerfilADM"><p>Cerrar Sesion</p></td>
                  </tr>
                </table>
      </div>
    
   	  <div class="contenedorInternoADM" align="center">
   	    <?php include ('informacion.php'); ?>

   	    <div class="botonesADM" align="center">
          <table border="0">
          <tr>
            <td><img src="imgBotonListarADM.png" alt="IconoListar" width="100" height="96" /></td>
            <td><img src="imgBotonAgregarADM.png" alt="IconoAgregar" width="100" height="96" /></td>
            <td><img src="ImgBotonCerrarsesionADM.png" alt="IconoCerrarsesion" width="103" height="102" /></td>
          </tr>
        </table>
        </div>
      </div>
    </div>    
  
</body>
</html>