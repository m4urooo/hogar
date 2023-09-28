@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Aregar Empleado</h1>
@stop

@section('content')



    <form method="POST" action="{{ route('empleados.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="row mb-3">
            <div class="col-md-4">
                <label  class="form-label">Nombres</label>

                <input type="text" class="form-control"  name="name">
            </div>
            <div class="col-md-4">
                <label for="inputLastName4" class="form-label">Apellidos</label>
                <input type="text" class="form-control" name="lastname">
            </div>
            <div class="col-md-2">
                <label for="inputRut4" class="form-label">Rut</label>
                <input type="text" class="form-control" name="rut">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Cargo</label>
                <input type="text" class="form-control" name="cargo">
            </div>
            <div class="col-md-2">
                <label for="inputRut4" class="form-label">Tipo Contrato</label>
                <input type="text" class="form-control" name="tipo_contrato">
            </div>
            <div class="col-md-2">
                <label for="inputRut4" class="form-label">Fecha Contrato</label>
                <input type="text" class="form-control" name="fecha_contrato">
            </div>
            <div class="col-md-2">
                <label class="form-label">Hogar</label>
                <input type="text" class="form-control" name="hogar">
            </div>

        </div>

        <div class="row mb-3">

            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Salud</label>
                <input type="text" class="form-control" name="salud">
            </div>
            <div class="col-md-1">
                <label for="inputPsalud" class="form-label">% Salud</label>
                <input type="text" class="form-control" name="valor_salud">
            </div>
            <div class="col-md-2">
                <label for="inputAfp" class="form-label">A.F.P.</label>
                <input type="text" class="form-control" name="afp">
            </div>
            <div class="col-md-1">
                <label for="inputPsalud" class="form-label">% A.F.P.</label>
                <input type="text" class="form-control" name="valor_afp">
            </div>
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Seguro de Cesantía</label>
                <input type="text"  class="form-control" name="seguro_cesantia">
            </div>
            <div class="col-md-2">
                <label  class="form-label">Correo</label>
                <input type="email" class="form-control" name="email">
            </div>


        </div>

        <hr>
        <b>REMUNERACIONES</b>

        <div class="row mb-3">


            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Sueldo Base</label>
                <input type="text" class="form-control" name="sueldo_base">
            </div>

            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Valor H/EX</label>
                <input type="text" class="form-control" name="valor_hora_ex">
            </div>
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Valor H/EX feriado</label>
                <input type="text" class="form-control" name="valor_hora_ex_feriado">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-2">
                <label for="inputAfp" class="form-label">Cantidad Asig. Familiar</label>
                <input type="number"  class="form-control" name="asig_familiar_cantidad">
            </div>
            <div class="col-md-2">
                <label for="inputAfp" class="form-label">Valor Asig. Familiar</label>
                <input type="number"   class="form-control" name="asig_familiar_valor">
            </div>
            <div class="col-md-2">
                <label for="inputRut4" class="form-label">C. Compensación</label>
                <input type="text"   class="form-control" name="caja_comp">
            </div>
            <div class="col-md-1">
                <label for="inputPsalud" class="form-label">% Caja</label>
                <input type="text"  class="form-control" name="valor_caja_comp">
            </div>
        </div>

        <b>OTROS</b>

        <div class="row mb-3">
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Prestamos CLA</label>
                <input type="text" class="form-control" name="prestamo_cla">
               
            </div>
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Valor cuota </label>
                <input type="text" class="form-control" name="valor_cuota_prestamo_cla">
               
            </div>
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Fecha Inicio </label>
                <input type="date" class="form-control" name="fecha_prestamo_cla">
            </div>
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Cantidad Cuotas </label>
                <input type="number" class="form-control"  name="cantidad_cuotas_prestamo_cla">
            </div>
            <div class="col-md-2">
                <label for="inputPsalud" class="form-label">Cuotas Restantes</label>
                <input type="number" class="form-control"  name="cuotas_restantes_prestamo_cla">
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Crear nuevo</button>
    </form>

@stop
