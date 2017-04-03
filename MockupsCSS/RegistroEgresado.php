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
            </p>
            </td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">N° DOCUMENTO:</td>
          <td><label for="numDoc"></label>
            <input name="numerodocumentoc" type="text" id="numerodocumentoc" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NOMBRES:</td>
          <td><input name="nombresc" type="text" id="nombresc" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">APELLIDOS:</td>
          <td><input name="apellidosc" type="text" id="apellidosc" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">FECHA DE NACIMIENTO:</td>
          <td><input type="date" name=""></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TÍTULO:</td>
          <td>
              <select id="titulo" name="titulo"> 
                 <option> Título</option>
              </select>
          </td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CORREO ELECTRÓNICO:</td>
          <td><input name="correoelectronicoc" type="text" id="correoelectronicoc" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CONTRASEÑA:</td>
            <td><input name="contraseñac" type="password" id="contraseñac" size="29"/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CONFIRMAR CONTRASEÑA:</td>
          <td><input name="contraseña2c" type="password" id="contraseña2c" size="29"/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">DIRECCIÓN:</td>
          <td><input name="direccionc" type="text" id="direccionc" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TELÉFONO:</td>
          <td><input name="telefonoc" type="text" id="telefonoc" size="29" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">ENTIDAD BANCARIA : </td>
          <td ><select name="entidadc" id="entidadc">
            <option>Entidad Bancaria</option>
            <option value="Tipo de Pago">Colpatria</option>
            <option value="Bancolombia">Bancolombia</option>
            <option value="Caja Social">Caja Social</option>
            <option value="Davivienda">Davivienda</option>
            <option value="Banco de Bogotá">Banco de Bogotá</option>
                              </select></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NÚMERO DE CUENTA:</td>
          <td>
            <input type="text" name="numerocuenta" id="numero de cuenta" />
          </td>
        </tr>
    

        <tr>
          <td class="fuenteRegistro2">TIPO DE CUENTA:</td>
          <td><select name="tipodepagoc" id="tipodepagoc">
                  <option value="Tipo de Pago" selected="selected">Tipo de Cuenta</option>
                  <option value="Cuenta de Ahorros">Cuenta de Ahorros</option>
                  <option value="Cuenta Corriente">Cuenta Corriente</option>
              </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center">  <input type="submit" name="button" id="button" value="Registrar" /></td>
          </tr>
    </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>

</body>
</html>