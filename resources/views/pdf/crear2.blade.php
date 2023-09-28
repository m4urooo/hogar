@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Crear Liquidación</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    

                    <br>
                    <hr>


                    <x-adminlte-datatable id="table1" :heads="$heads" striped head-theme="light" >

                        @foreach ($todos as $todo)
                            <tr>
                                <td>{{ $todo->rut }}</td>
                                <td>{{ $todo->name }}</td>
                          
                                <td><a class="btn btn-secondary" href="{{ route('pdf.detalles', $todo->id) }} "><i
                                            class="fas fa-plus"></i> Crear</a>
                                </td>

                            </tr>
                        @endforeach


                    </x-adminlte-datatable>



                </div>
            </div>
        </div>
    </div>



@stop
