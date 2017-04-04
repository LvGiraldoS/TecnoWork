@Extends ('layout.master')
@Section('content')
<h1> Actualizar Usuarios </h1>
<form method='Post' action="{{url('actualizar',$usuario->id_usuario)}}">
{!!csrf_field()!!}
<table width="200" border="0">
  <tr>
    <td>Id Usuario <input type ="text" name="id_usuario" Value="{{$usuario->id_usuario}}"> 
</td>
    <td>Tipo Identificacion <input type ="text" name="tipo_identificacion" Value="{{$usuario->tipo_identificacion}}"> </td>
    <td>Número Identificacion <input type ="text" name="identificacion" Value="{{$usuario->identificacion}}"> </td>
    <td>Nombres <input type ="text" name="nombres" Value="{{$usuario->nombres}}"> </td>
    <td>Apellidos <input type ="text" name="apellidos" Value="{{$usuario->apellidos}}"> </td>
    <td>Fecha Nacimiento <input type ="text" name="fecha_nacimiento" Value="{{$usuario->fecha_nacimiento}}"> </td>
    <td>titulo <input type ="text" name="titulo" Value="{{$usuario->titulo}}"> </td>
    <td>correo_electronico <input type ="text" name="correo_electronico" Value="{{$usuario->correo_electronico}}"> </td>
    <!--<td>contraseña <input type ="text" name="contraseña" Value="{{$usuario->contraseña}}"> </td>-->
    <td>direccion <input type ="text" name="direccion" Value="{{$usuario->direccion}}"> </td>
    <td>telefono <input type ="text" name="telefono" Value="{{$usuario->telefono}}"> </td>
    <td>entidad_bancaria <input type ="text" name="entidad_bancaria" Value="{{$usuario->entidad_bancaria}}"> </td>
    <td>numero_cuenta <input type ="text" name="numero_cuenta" Value="{{$usuario->numero_cuenta}}"> </td>
    <td>id_tipo_transaccion <input type ="text" name="id_tipo_transaccion" Value="{{$usuario->id_tipo_transaccion}}"> </td>
    <td>disponibilidad <input type ="text" name="disponibilidad" Value="{{$usuario->disponibilidad}}"> </td>
    <td>tipo_usuario <input type ="text" name="tipo_usuario" Value="{{$usuario->tipo_usuario}}"> </td>
  </tr>


</table>


<input type ="Submit" name="Editar Usuario"> 
</form>
@endsection
