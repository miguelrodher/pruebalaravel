<h2>Lista de Estudiantes</h2>

<a href="{{ route('estudiantes.create') }}">Nuevo Estudiante</a>

<table border="1">
<tr>
	<th>Nombre</th>
	<th>Apellidos</th>
	<th>Email</th>
	<th>Teléfono</th>
	<th>Grupo</th>
	<th>Acciones</th>
</tr>

@foreach($estudiantes as $est)
<tr>
	<td>{{ $est->nombre }}</td>
	<td>{{ $est->apellidos }}</td>
	<td>{{ $est->email }}</td>
	<td>{{ $est->telefono }}</td>
	<td>{{ $est->grupo->grupo }}</td>
	<td>
		<a href="{{ route('estudiantes.edit',$est->id_estudiante) }}">Editar</a>
		<form action="{{ route('estudiantes.destroy',$est->id_estudiante) }}" method="POST">
			@csrf @method('DELETE')
			<button type="submit">Eliminar</button>
		</form>
	</td>
</tr>
@endforeach
</table>
