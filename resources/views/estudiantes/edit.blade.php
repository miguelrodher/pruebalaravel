<h2>Editar Estudiante</h2>

<a href="{{ route('estudiantes.index') }}">Volver a la lista</a>

<form method="POST" action="{{ route('estudiantes.update', $estudiante->id_estudiante) }}">
    @csrf
    @method('PUT')

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre', $estudiante->nombre) }}" required maxlength="50">
    @error('nombre')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Apellidos:</label>
    <input type="text" name="apellidos" value="{{ old('apellidos', $estudiante->apellidos) }}" required maxlength="50">
    @error('apellidos')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Edad:</label>
    <input type="number" name="edad" value="{{ old('edad', $estudiante->edad) }}" required min="1">
    @error('edad')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email', $estudiante->email) }}" required maxlength="100">
    @error('email')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="{{ old('telefono', $estudiante->telefono) }}" required maxlength="15">
    @error('telefono')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Grupo:</label>
    <select name="grupo_id" required>
        @foreach($grupos as $grupo)
            <option value="{{ $grupo->id_grupo }}" {{ $estudiante->grupo_id == $grupo->id_grupo ? 'selected' : '' }}>
                {{ $grupo->grupo }} - Semestre {{ $grupo->semestre }}
            </option>
        @endforeach
    </select>
    @error('grupo_id')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Actualizar</button>
</form>
