<h1>Crear Vehículo</h1>
<form action="{{ route('vehiculos.store') }}" method="POST">
    @csrf
    <label>Tipo de Vehículo:</label>
    <input type="text" name="tipo_vehiculo" required>
    <label>Categoría:</label>
    <input type="text" name="categoria" required>
    <button type="submit">Guardar</button>
</form>
