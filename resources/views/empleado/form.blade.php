<!--Formulario que tendrá los datos en común con CREATE y EDIT-->




<h1>{{ $modo }} empleado</h1> <!-- Recogemos el dato de la vista -->

<div class="form-group row">

<label class="form-label" for="Nombre">Nombre:</label>
<div class="col-sm-10">
    <input class="form-control" type="text" name="Nombre" value="{{ isset($empleado->Nombre)?$empleado->Nombre:'' }}" id="Nombre">
</div>
</div>

<label class="sr-only"></label>

<div class="form-group row">
<label class="form-label" for="Apellido1">Apellido1:</label>
<div class="col-sm-10">
    <input class="form-control" type="text" name="Apellido1" value="{{ isset($empleado->Apellido1)?$empleado->Apellido1:'' }}" id="Apellido1">
</div>
</div>

<label class="sr-only"></label>

<div class="form-group row">
<label class="form-label" for="Apellido2">Apellido2:</label>
<div class="col-sm-10">
    <input class="form-control" type="text" name="Apellido2" value="{{ isset($empleado->Apellido2)?$empleado->Apellido2:'' }}" id="Apellido2">
</div>
</div>

<label class="sr-only"></label>

<div class="form-group row">
<label class="form-label" for="Email">Email:</label>
<div class="col-sm-10">
    <input class="form-control" type="email" name="Email" value="{{ isset($empleado->Email)?$empleado->Email:'' }}" id="Email"> <!-- isset($empleado->Email)?$empleado->Email:'' Valida si existe el dato, si existe lo imprime, sino lo imprime vacío  -->
</div>
</div>

<label class="sr-only"></label>

<div class="form-group">
<label class="form-label" for="Foto">Foto:</label>
<div class="col-sm-10">
@if(isset($empleado->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="95px" alt="">
@endif
</div>

<label class="sr-only"></label>

<div class="col-sm-10">
    <input class="form-control" type="file" name="Foto" value="" id="Foto">
</div>
</div>

<label class="sr-only"></label>

<div class="col-sm-10">
    <input class="btn btn-success" type="submit" value="{{$modo}} datos" id="Guardar datos">
    |
    <a class="btn btn-primary" href="{{ url('empleado/') }}"><= Volver</a>
</div>




