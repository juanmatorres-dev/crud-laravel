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

            <td>
                <img src="{{ asset('storage').'/'.$empleado->Foto }}" alt="">
                
            </td>

            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido1 }}</td>
            <td>{{ $empleado->Apellido2 }}</td>
            <td>{{ $empleado->Email }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}">
                    Editar
                </a>
                 | 

                <form action="{{ url('/empleado/'.$empleado->id) }}" method="post">
                    @csrf

                    {{ method_field('DELETE') }}

                    <input type="submit" onclick="return confirm('¿Borrar empleado?')" value="Borrar">
                </form>
                
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>