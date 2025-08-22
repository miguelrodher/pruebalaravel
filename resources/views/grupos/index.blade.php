<h2>Lista de Grupos</h2>

<a href="{{ route('grupos.create') }}">Nuevo Grupo</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Semestre</th>
    <th>Grupo</th>
    <th>Turno</th>
    <th>Acciones</th>
</tr>

@foreach($grupos as $g)
<tr>
    <td>{{ $g->id_grupo }}</td>
    <td>{{ $g->semestre }}</td>
    <td>{{ $g->grupo }}</td>
    <td>{{ $g->turno }}</td>
    <td>
        <a href="{{ route('grupos.edit', $g->id_grupo) }}">Editar</a>
        <form action="{{ route('grupos.destroy', $g->id_grupo) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach

</table>
