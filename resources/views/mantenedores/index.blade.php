@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Mantenedores</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="col-md-4">

                        <table class="table table-hover">
                            SALUD
                            <a class="btn btn-success" href="{{ route('empleados.new') }}"><i class="fas fa-plus"></i>
                                Agregar</a>
                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModalCenter">
                                Launch demo modal
                            </button>


                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Agregar Salud</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Valor</th>
                                    <th scope="col">Acción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($salud as $salu)
                                        <th scope="row">{{ $salu->id }}</th>
                                        <td>{{ $salu->name }}</td>
                                        <td>{{ $salu->value }}</td>
                                        <td>@mdo</td>
                                    @endforeach
                                </tr>

                            </tbody>
                        </table>




                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
