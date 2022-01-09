<p>Formulario de creación de empleados</p> 



<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <label for="Nombre">Nombre:</label>
    <input type="text" name="Nombre" id="Nombre">
    <br/>
    <label for="Apellido1">Apellido1:</label>
    <input type="text" name="Apellido1" id="Apellido1">
    <br/>
    <label for="Apellido2">Apellido2:</label>
    <input type="text" name="Apellido2" id="Apellido2">
    <br/>
    <label for="Email">Email:</label>
    <input type="email" name="Email" id="Email">
    <br/>
    <label for="Foto">Foto:</label>
    <input type="file" name="Foto" id="Foto">
    <br/>
    <input type="submit" value="Guardar datos" id="Guardar datos">
</form>