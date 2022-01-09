<!--Formulario que tendrá los datos en común con CREATE y EDIT-->


<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{ $empleado->Nombre }}" id="Nombre">
<br />
<label for="Apellido1">Apellido1:</label>
<input type="text" name="Apellido1" value="{{ $empleado->Apellido1 }}" id="Apellido1">
<br />
<label for="Apellido2">Apellido2:</label>
<input type="text" name="Apellido2" value="{{ $empleado->Apellido2 }}" id="Apellido2">
<br />
<label for="Email">Email:</label>
<input type="email" name="Email" value="{{ $empleado->Email }}" id="Email">
<br />
<label for="Foto">Foto:</label>
{{ $empleado->Foto }}
<input type="file" name="Foto" value="" id="Foto">
<br />
<input type="submit" value="Guardar datos" id="Guardar datos">