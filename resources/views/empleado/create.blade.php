<p>Formulario de creación de empleados</p> 



<form action="{{ url('/empleado') }}" method="post" enctype="multipart/form-data">
    @csrf
    
    <!-- Enviamos un dato (en este caso texto plano) a la vista que vamos a incluir -->
    @include('empleado.form',['modo'=>'Crear'])
    
</form>