<h2>Nuevo Estudiante</h2>

<a href="{{ route('estudiantes.index') }}">Volver a la lista</a>

<form method="POST" action="{{ route('estudiantes.store') }}">
    @csrf

    <label>Nombre:</label>
    <input type="text" name="nombre" value="{{ old('nombre') }}" required maxlength="100">
    @error('nombre')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Apellidos:</label>
    <input type="text" name="apellidos" value="{{ old('apellidos') }}" required maxlength="150">
    @error('apellidos')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Edad:</label>
    <input type="number" name="edad" value="{{ old('edad') }}" required min="1">
    @error('edad')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Email:</label>
    <input type="email" name="email" value="{{ old('email') }}" required maxlength="150">
    @error('email')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="{{ old('telefono') }}" required maxlength="15">
    @error('telefono')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <label>Grupo:</label>
    <select name="grupo_id" required>
        @foreach($grupos as $grupo)
            <option value="{{ $grupo->id_grupo }}">{{ $grupo->grupo }} - Semestre {{ $grupo->semestre }}</option>
        @endforeach
    </select>
    @error('grupo_id')
        <div>{{ $message }}</div>
    @enderror
    <br>

    <button type="submit">Guardar</button>
</form>
