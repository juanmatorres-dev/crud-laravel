Mostrar la lista de empleados


<table class="table table-light">
    
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido1</th>
            <th>Apellido2</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach( $empleados as $empleado )
        <tr>
            <td>{{ $empleado->id }}</td>
            <td>{{ $empleado->Foto }}</td>
            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido1 }}</td>
            <td>{{ $empleado->Apellido2 }}</td>
            <td>{{ $empleado->Email }}</td>
            <td>Editar | Borrar</td>
        </tr>
        @endforeach
    </tbody>

</table>