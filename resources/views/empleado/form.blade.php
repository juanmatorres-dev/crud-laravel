<!--Formulario que tendrá los datos en común con CREATE y EDIT-->


<label for="Nombre">Nombre:</label>
<input type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
<br />
<label for="Apellido1">Apellido1:</label>
<input type="text" name="Apellido1" value="{{ isset($empleado->Apellido1)?$empleado->Apellido1:'' }}" id="Apellido1">
<br />
<label for="Apellido2">Apellido2:</label>
<input type="text" name="Apellido2" value="{{ isset($empleado->Apellido2)?$empleado->Apellido2:'' }}" id="Apellido2">
<br />
<label for="Email">Email:</label>
<input type="email" name="Email" value="{{ isset($empleado->Email)?$empleado->Email:'' }}" id="Email"> <!-- isset($empleado->Email)?$empleado->Email:'' Valida si existe el dato, si existe lo imprime, sino lo imprime vacío  -->
<br />
<label for="Foto">Foto:</label>
@if(isset($empleado->Foto))
<img src="{{ asset('storage').'/'.$empleado->Foto }}" width="95px" alt="">
@endif
<input type="file" name="Foto" value="" id="Foto">
<br />
<input type="submit" value="Guardar datos" id="Guardar datos">