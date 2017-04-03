@extends ('layout.master')
@section ('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link href="css/HojaEstilos.css" rel="stylesheet" type="text/css" />
</head>

<body>
<p>&nbsp;</p>
<table width="900" border="3" align="center" bordercolor="#02727D">
  <tr>
    <td  class="FondoAzul" ><form id="form1" name="form1" method="post" action="{{url('insertar_usuarios')}}">
    {!! csrf_field() !!}
      <table width="539" border="0" align="center"  bordercolor="#02727D">
        <tr>
          <td colspan="2" align="center" class="fuenteRegistro" ><p>REGISTRO EGRESADO</p></td>
        </tr>
                <tr>
          <td width="285" class="fuenteRegistro2">TIPO DE DOCUMENTO DE IDENTIDAD:</td>
          <td width="244" class="fuenteRegistro3"><label for="tipo_identificacion"></label>
            <p>
              <label>
                <input type="radio" name="tipo_identificacion" value="CC" id="tipoDoc_0" />
                CC</label>
                <label>
                  <input type="radio" name="tipo_identificacion" value="CE" id="tipoDoc_1" />
                CE</label>
              <label>
                <input type="radio" name="tipo_identificacion" value="Pasaporte" id="tipoDoc_2" />
                Pasaporte</label>
              <br />
            </p>
            </td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">N° DOCUMENTO:</td>
          <td><label for="numDoc"></label>
            <input title="Se necesita un número de identificación" name="identificacion" type="text" id="identificacion" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NOMBRES:</td>
          <td><input title="Se necesitan un nombre(min)" name="nombres" type="text" id="nombres" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">APELLIDOS:</td>
          <td><input title="Se necesitan ambos apellidos" name="apellidos" type="text" id="apellidos" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">FECHA DE NACIMIENTO:</td> 
          <td> <input title="Se necesita una fecha de nacicmiento" type="date" name="fecha_nacimiento" required></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TÍTULO:</td>
          <td>
            <select name="titulo" id="titulo" required> <option>Título</option></select>
          </td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CORREO ELECTRÓNICO: (personal)</td>
          <td><input  name="correo_electronico" type="text" id="correo_electronico" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CONTRASEÑA</td>
            <td><input title="Se necesita una contraseña segura" name="contraseña" type="text" id="contraseña" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CONFIRMAR CONTRASEÑA:</td>
          <td><input title="Se necesita confirmar la contraseña"name="contraseña2" type="text" id="contraseña2" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">DIRECCIÓN:</td>
          <td><input  name="direccion" type="text" id="direccion" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TELÉFONO:</td>
          <td><input name="telefono" type="text" id="telefono" size="29" required/></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">ENTIDAD BANCARIA : </td>
          <td ><select name="entidad_bancaria" id="entidad_bancaria" required>
            <option>Entidad Bancaria</option>
            <option value="Colpatria">Colpatria</option>
            <option value="Bancolombia">Bancolombia</option>
            <option value="Caja Social">Caja Social</option>
            <option value="Davivienda">Davivienda</option>
            <option value="Banco de Bogotá">Banco de Bogotá</option>
            </select></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NÚMERO DE CUENTA:</td>
          <td>
            <input type="text" name="numero_cuenta" id="numero_cuenta" required/>
          </td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TIPO DE CUENTA: </td>
          <td ><select name="id_tipo_transaccion" id="id_tipo_transaccion" required>
              <option value="Tipo de Cuenta" selected="selected">Tipo de Cuenta</option>
              <option value="3">Cuenta de Ahorros</option>
              <option value="4">Cuenta Corriente</option>
              </select></td>
        </tr>
        <tr>
          <td colspan="2" align="center">  <input type="submit" name="button" id="button" value="Registrar" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="hidden" name="tipo_usuario" id="tipo_usuario" value="Egresado"/></td>   
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="hidden" name="disponibilidad" id="disponibilidad" value="Null"/></td>   
        </tr>
    </table>
      <p>&nbsp;</p>
    </form></td>
  </tr>
</table>

</body>
</html>
@endsection