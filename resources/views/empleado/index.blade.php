@extends('layouts.app')

@section('content')
<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-dismissible alert-success" role="alert">
    
        <!-- Para recibir el mensaje de sesión -->
        {{ Session::get('mensaje') }}

   
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

</div>
 @endif 

<a href="{{ url('empleado/create') }}" class="btn btn-success">Registrar nuevo empleado</a>
<br><br>

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
                <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$empleado->Foto }}" width="95px" alt="">
                
            </td>

            <td>{{ $empleado->Nombre }}</td>
            <td>{{ $empleado->Apellido1 }}</td>
            <td>{{ $empleado->Apellido2 }}</td>
            <td>{{ $empleado->Email }}</td>
            <td>
                <a href="{{ url('/empleado/'.$empleado->id.'/edit') }}" class="btn btn-warning">
                    Editar
                </a>
                 | 

                <form action="{{ url('/empleado/'.$empleado->id) }}" class="d-inline" method="post">
                    @csrf

                    {{ method_field('DELETE') }}

                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar empleado?')" value="Borrar">
                </form>
                
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

{!! $empleados->links() !!} <!-- Pagina los resultados -->

<!-- Cuenta los empleados por página -->
Número de empleados : 
<span class="badge bg-primary badge-pill">
    
    {!! $empleados->count() !!}
</span>
 

</div>
@endsection