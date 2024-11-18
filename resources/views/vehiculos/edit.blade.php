<h1>Editar Vehículo</h1>
<form action="{{ route('vehiculos.update', $vehiculo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Tipo de Vehículo:</label>
    <input type="text" name="tipo_vehiculo" value="{{ $vehiculo->tipo_vehiculo }}" required>
    <label>Categoría:</label>
    <input type="text" name="categoria" value="{{ $vehiculo->categoria }}" required>
    <button type="submit">Actualizar</button>
</form>
