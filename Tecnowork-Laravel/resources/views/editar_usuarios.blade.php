<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<link rel="stylesheet" href="css/HojaEstilos.css" type="text/css" />
</head>

<body>
@Extends ('layout.master')
@Section('content')

    <form method='Post' action="{{url('actualizar',$usuario->id_usuario)}}">
    {!!csrf_field()!!}
        
      <table width="539" border="0" align="center" >
        <tr>
          <td height="57" colspan="2" align="center" class="fuenteRegistro" ><p>EDITAR USUARIOS</p></td>
        </tr>
        <tr>
          <td width="285" height="26" class="fuenteRegistro2">ID USUARIO</td>
          <td width="244" class="fuenteRegistro3"><label for="tipoDoc"></label>
            <p>
              <input type ="text" name="id_usuario" value="{{$usuario->id_usuario}}" />
              <br />
            </p>
            </td>
        </tr>
        <tr>
          <td height="25" class="fuenteRegistro2">TIPO DE IDENTIFICACIÓN</td>
          <td><label for="numDoc"></label>
            <input type ="text" name="tipo_identificacion" value="{{$usuario->tipo_identificacion}}" /></td>
        </tr>
        <tr>
          <td height="28" class="fuenteRegistro2">NÚMERO DE IDENTIFICACIÓN</td>
          <td><input type ="text" name="identificacion" value="{{$usuario->identificacion}}" /></td>
        </tr>
        <tr>
          <td height="24" class="fuenteRegistro2">NOMBRES</td>
          <td><input type ="text" name="nombres" value="{{$usuario->nombres}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">APELLIDOS</td>
          <td><input type ="text" name="apellidos" value="{{$usuario->apellidos}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">FECHA DE NACIMIENTO </td>
          <td><input type ="text" name="fecha_nacimiento" value="{{$usuario->fecha_nacimiento}}" /></td>
        </tr>
        <tr>
            <td class="fuenteRegistro2">TITULO</td>
            <td><input type ="text" name="titulo" value="{{$usuario->titulo}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">CORREO ELECTRONICO</td>
          <td><input type ="text" name="correo_electronico" value="{{$usuario->correo_electronico}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">DIRECCIÓN:</td>
          <td><input type ="text" name="direccion" value="{{$usuario->direccion}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TELÉFONO:</td>
          <td><input type ="text" name="telefono" value="{{$usuario->telefono}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">ENTIDAD BANCARIA : </td>
          <td ><input type ="text" name="entidad_bancaria" value="{{$usuario->entidad_bancaria}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">NÚMERO DE CUENTA:</td>
          <td><input type ="text" name="numero_cuenta" value="{{$usuario->numero_cuenta}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">ID TIPO DE TRANSACCIÓN:</td>
          <td><input type ="text" name="id_tipo_transaccion" value="{{$usuario->id_tipo_transaccion}}" /></td>
        </tr>
    

        <tr>
          <td class="fuenteRegistro2">DISPONIBILIDAD</td>
          <td ><input type ="text" name="disponibilidad" value="{{$usuario->disponibilidad}}" /></td>
        </tr>
        <tr>
          <td class="fuenteRegistro2">TIPO DE USUARIO</td>
          <td><input type ="text" name="tipo_usuario" value="{{$usuario->tipo_usuario}}" /></td>
        </tr>
        <tr>
          <td height="44" colspan="2" align="center">  <input type="submit" name="actualizar" id="actualizar" value="Actualizar" /></td>
          </tr>
    </table>
     
    </form>
    
    
    





</body>
</html>
@endsection