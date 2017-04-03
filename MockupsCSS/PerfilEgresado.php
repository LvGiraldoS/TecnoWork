<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="estilosPerfil.css">


</head>
<body>
    

    <div class="perfil">
        
      <table width="332"  border="0" bgcolor="#EEEEEE" class="tablaPerfil">
      <tr>
        <td height="45" colspan="2" class="tituloPerfil">PERFIL</td>
      </tr>
      <tr>
        <td height="133" colspan="2" align="center"><img src="foto.png" alt="iconoFoto" width="135" height="131"  /></td>
      </tr>
      <tr>
        <td height="31" colspan="2" class="titulo2Perfil">INFORMACION EGRESADO</td>
      </tr>
      <tr>
        <td height="126" colspan="2"><table width="100%" border="0" class="texto1Perfil"> 
          <tr>
            <td width="47%">Nombre Completo</td>
            <td width="53%">Adriana Bogota</td>
          </tr>
          <tr>
            <td>Numero de documento</td>
            <td>1013672546</td>
          </tr>
          <tr>
            <td>Direccion</td>
            <td>calle50 sur 93d 38</td>
          </tr>
          <tr>
            <td>Telefono</td>
            <td>4588069</td>
          </tr>
          <tr>
            <td>Correo Electronico</td>
            <td>adriana.9723@gamil,com</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="30" colspan="2" class="titulo2Perfil">IMFORMACION DE SERVICIO </td>
      </tr>
      <tr>
        <td height="70" colspan="2"><table width="100%" border="0" class="texto1Perfil">
          <tr>
            <td width="47%">Numero De Servicio</td>
            <td width="53%">000025</td>
          </tr>
          <tr>
            <td>Servicio</td>
            <td>Matenimiento </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="34" colspan="2" class="titulo2Perfil">PROMEDIO DE CAIFICACIONES</td>
      </tr>
      <tr>
        <td colspan="2"><img src="estrellasDeCalificacion.PNG" width="200" height="49" /></td>
      </tr>
      <tr>
        <td width="226" height="71">&nbsp;</td>
        <td width="86" align="right"><img src="configuraciones.png" width="62" height="61"></td>
      </tr>
    </table>
    </div>
    <div class="contenedor">
    		<div id="menuPerfil">
                <table width="272"  align="right"  height="27" border="0" >
                  <tr>
                    <td width="34%" class="menuPerfil">Sugerencias|</td>
                    <td width="31%" class="menuPerfil"> Tutoriales |</td>
                    <td width="35%" class="menuPerfil"><p>Cerrar Sesion</p></td>
                  </tr>
                </table>
      </div>
    
   	  <div class="contenedorInterno" align="center">
   	    <?php include ('informacion.php'); ?>

   	    <div class="botones" align="center">
          <table border="0">
          <tr>
            <td><img src="imgIconoInicioPERFIL.PNG" alt="IconoConsultarServicios" width="100" height="96" /></td>
            <td><img src="imgIconoConsultarPERFIL.PNG" alt="IconoConsultarServicios" width="100" height="96" /></td>
            <td><img src="imgIconoGenerarReportePERFIL.PNG" alt="IconoGenerarReporte" width="103" height="102" /></td>
            <td><img src="imgIconoPagosPERFIL.PNG" alt="IconoInformeDePago" width="98" height="99" /></td>
            <td><img src="imgIconoSoportePERFIL.PNG" alt="IconoAyudaSoporte" width="96" height="95" /></td>
          </tr>
        </table>
        </div>
      </div>
    </div>    
  
</body>
</html>