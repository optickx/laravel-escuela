<h2>LISTADO DE ALUMNOS</h2>

{{-- <!-- Formulario de búsqueda -->
<form action="{{ route('alumnos.search') }}" method="get">
    <input type="text" name="query" placeholder="Buscar alumno..." required>
    <button type="submit">Buscar</button>
</form> --}}

<table style="border:2px solid red">
    <tr>
        <th>Nombre </th>
        <th>Edad</th>
        <th>Telefono</th>
        <th>Direccion</th>

    </tr>

    @foreach ($alumnos as $alumno)
        <tr>
            <td> {{ $alumno->nombre }}</td>
            <td> {{ $alumno->edad }}</td>
            <td> {{ $alumno->telefono }}</td>
            <td> {{ $alumno->direccion }}</td>
        </tr>
    @endforeach

    {{--     <a href="{{ route('alumnos.show', $alumno->id) }}"> {{ $alumno->nombre_ape }}</a>
 --}}
</table>
