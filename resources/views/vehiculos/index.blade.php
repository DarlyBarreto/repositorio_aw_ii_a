<h1>Lista de Vehículos</h1>
<a href="{{ route('vehiculos.create') }}">Crear Vehículo</a>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Tipo de Vehículo</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->tipo_vehiculo }}</td>
                <td>{{ $vehiculo->categoria }}</td>
                <td>
                    <a href="{{ route('vehiculos.edit', $vehiculo->id) }}">Editar</a>
                    <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
