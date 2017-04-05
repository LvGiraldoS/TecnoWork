<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<link rel="stylesheet" href="HojaEstilos.css" type="text/css" />
</head>

<body 

  <ul>
<table border="1" class="Listar" >
    <tr>
            <td>ID</td>
            <td>T.D</td>
            <td>N° DOC</td>
            <td>NOMBRES</td>
            <td>APELLIDOS</td>
            <td>CORREO ELECTRÓNICO</td>
            <td>DIRECCIÓN</td>
            <td>TELÉFONO</td>
            <td>ENTIDAD BANCARIA</td>
            <td>N° CUENTA</td>
            <td>TIPO TRANSACCIÓN</td>
            <td>TIPO USUARIO</td>
            <td colspan="2">CAMBIOS</td>
    
    </tr>
@foreach($usuario as $usuarios)

    <tr>
            <td>{{$usuarios->id_usuario}}</td>
            <td>{{$usuarios->tipo_identificacion}}</td>
            <td>{{$usuarios->identificacion}}</td>
            <td>{{$usuarios->nombres}}</td>
            <td>{{$usuarios->apellidos}}</td>
            <td>{{$usuarios->correo_electronico}}</td>
            <td>{{$usuarios->direccion}}</td>
            <td>{{$usuarios->telefono}}</td>
            <td>{{$usuarios->entidad_bancaria}}</td>
            <td>{{$usuarios->numero_cuenta}}</td>
            <td>{{$usuarios->nombre_tipo_transaccion}}</td>
            <td>{{$usuarios->tipo_usuario}}</td>
            
            <td><a href="perfiADMeditar.php">Editar</a></td>
            <td><a href="{{url('eliminar',$usuarios->id_usuario)}}">Eliminar</a></td>
    </tr>

@endforeach
</table>

<ul>
@endsection
</body>

</html>