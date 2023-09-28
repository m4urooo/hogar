@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Crear Liquidación</h1>
@stop

@section('content')
    <form method="POST" action="{{ route('pdf.crearPDF') }}" enctype="multipart/form-data">
        @csrf


        <div class="row mb-2">
            <select name="id_empleado" class="form-select" aria-label="Default select example">
                <option selected>Seleccione Trabajador</option>
                @foreach ($todos as $todo)
                    <option  name="op" value="{{ $todo->id }}">{{ $todo->name }}</option>
                @endforeach
            </select>

          </div>


        <div class="col-md-2">
            <label class="col-form-label">Días Trabajados</label>
            <input type="text" class="form-control" name="dias_trabajados">
        </div>

        <div class="row mb-3">
            <div class="col-md-2">
                <label class="col-form-label">Horas Trabajadas</label>
                <input type="text" class="form-control" name="horas_trabajadas">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label class="col-form-label">Horas Extras</label>
                <input type="text" class="form-control" name="horas_extras">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-2">
                <label class="col-form-label">Aguinaldo - Bonos</label>
                <input type="text" class="form-control" name="aguinaldo_bonos">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2">
                <label for="inputEmail4" class="form-label">Anticipos</label>
                <input type="text" class="form-control" name="anticipos">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Cuotas  </label>
                <input type="number" class="form-control" name="cuotas_prestamo_cla">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Crear nuevo</button>
        </div>

    </form>




@stop
