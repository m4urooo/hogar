@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Empleados</h1>
@stop



@section('content')
<a  class="btn btn-success"  href="{{ route('empleados.new') }}"><i class="fas fa-plus"></i> Agregar</a>

    <div class="card-body">
        <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="light" with-buttons>
 
                    @foreach ($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->id }}</td>
                            <td>{{ $empleado->name }}</td>
                            <td>{{ $empleado->email }}</td>
                            <td><a class="btn btn-warning" 
                                href="{{ route('empleados.edit',$empleado->id) }} "><i class="fas fa-plus"></i> Ver</a>
                            </td>
                    
                        </tr>
                        
                    @endforeach
          

        </x-adminlte-datatable>
      

    </div>
  
@stop
