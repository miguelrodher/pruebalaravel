<h2>Editar Grupo</h2>

<a href="{{ route('grupos.index') }}">Volver a la lista</a>

<form method="POST" action="{{ route('grupos.update', $grupo->id_grupo) }}">
    @csrf
    @method('PUT')

    <label>Semestre:</label>
    <input type="number" name="semestre" min="1" value="{{ old('semestre', $grupo->semestre) }}" required>
    @error('semestre')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Grupo:</label>
    <input type="text" name="grupo" maxlength="10" value="{{ old('grupo', $grupo->grupo) }}" required>
    @error('grupo')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Turno:</label>
    <input type="text" name="turno" maxlength="20" value="{{ old('turno', $grupo->turno) }}" required>
    @error('turno')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Actualizar</button>
</form>
