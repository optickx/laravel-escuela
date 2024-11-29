<!-- resources/views/alumnos/confirm_delete.blade.php -->
<h2>Confirmación de eliminación</h2>

<p>¿Estás seguro de que deseas eliminar este alumno?</p>

<table style="border:2px solid red">
    <tr>
        <th>Nombre:</th>
        <td>{{ $alumno->nombre }}</td>
    </tr>
    <tr>
        <th>Edad:</th>
        <td>{{ $alumno->edad }}</td>
    </tr>
    <tr>
        <th>Teléfono:</th>
        <td>{{ $alumno->telefono }}</td>
    </tr>
    <tr>
        <th>Dirección:</th>
        <td>{{ $alumno->direccion }}</td>
    </tr>
</table>

<!-- Formulario para confirmar eliminación -->
<form action="{{ route('alumnos.destroy', $alumno->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" style="color: red;">Eliminar</button>
    <a href="{{ route('alumnos.index') }}">Cancelar</a>
</form>
