<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="HojaEstilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>&nbsp;</p>
<table width="900" border="3" align="center" bordercolor="#02727D">
  <tr>
    <td  class="FondoAzul" ><form id="form1" name="form1" method="post" action="">
      <table width="539" border="0" align="center"  bordercolor="#02727D">
        <tr>
          <td colspan="2" align="center" class="fuenteRegistro" ><p>REGISTRO EGRESADO</p></td>
        </tr>
        <tr>
          <td width="285" class="fuenteRegistro2">TIPO DE DOCUMENTO DE IDENTIDAD:</td>
          <td width="244" class="fuenteRegistro3"><label for="tipoDoc"></label>
            <p>
              <label>
                <input type="radio" name="tipoDoc" value="CC" id="tipoDoc_0" />
                CC</label>
                <label>
                  <input type="radio" name="tipoDoc" value="CE" id="tipoDoc_1" />
                CE</label>
              <label>
                <input type="radio" name="tipoDoc" value="Pasaporte" id="tipoDoc_2" />
                Pasaporte</label>
              <br />
            </p></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">N° DOCUMENTO:</td>
          <td><label for="numDoc"></label>
            <input name="numerodocumentoe" type="text" id="numerodocumentoe" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NOMBRES:</td>
          <td><input name="nombrese" type="text" id="nombrese" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">APELLIDOS:</td>
          <td><input name="apellidose" type="text" id="apellidose" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">FECHA DE NACIMIENTO:</td>
          <td><label for="dia"></label>
            <label for="dia"><input name="fechanacimientoe" type="Date" id="fechanacimientoe"/></label></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">DIRECCIÓN:</td>
          <td><input name="direccione" type="text" id="direccione" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TELÉFONO:</td>
          <td><input name="telefonoe" type="text" id="telefonoe" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TÍTULO:</td>
          <td><input type="file" name="tituloe" id="tituloe" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CORREO ELECTRÓNICO: (misena)</td>
          <td><input name="correoelectronicoe" type="text" id="correoelectronicoe" size="29" /></td>
        </tr>
        <tr>
        	<td class="fuenteRegistro2">CONTRASEÑA</td>
            <td><input name="contraseñae" type="text" id="contraseñae" size="29"/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CONFIRMAR CONTRASEÑA:</td>
          <td><input name="contraseña2e" type="text" id="contraseña2e" size="29"/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">BANCO: </td>
          <td ><input name="bancoe" type="text" id="bancoe" size="29"/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NUMERO DE CUENTA: </td>
          <td ><input name="cuentae" type="text" id="cuentae" size="29"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="registrar" id="registrar" value="Registrar" /></td>
       </tr>
      </table>
      <p><br />
        <br />
        <br />
      </p>
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>