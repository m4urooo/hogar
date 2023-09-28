@extends('adminlte::page')


@section('content_header')
    <h1 class="m-0 text-dark">Crear Liquidación de {{$empleado->name}} {{$empleado->lastname}}</h1>
@stop



@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                 
                  
                    <form method="POST" action="{{ route('pdf.crearPDF2') }}" enctype="multipart/form-data">
                        @csrf
                        <h3> Haberes </h3>	
                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label  class="form-label">Días Trabajados</label>
                                <input type="number" class="form-control"  name="dias_trabajados">
                            </div>
                            <div class="col-md-2">
                                <label  class="form-label">Horas Trabajadas</label>
                                <input type="number" class="form-control" name="horas_trabajadas">
                            </div>
                            <div class="col-md-2">
                                <label  class="form-label">Horas Extras</label>
                                <input type="number" class="form-control" name="horas_extras">
                            </div>
                      

                           
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-2">
                                <label  class="form-label">Horas Extras Feriado</label>
                                <input type="number" class="form-control" name="horas_ex_feriado">
                            </div>
                            <div class="col-md-2">
                                <label  class="form-label">Aguinaldo - Bonos</label>
                                <input type="number" class="form-control"  name="aguinaldo_bonos">
                            </div>
                            <div class="col-md-2">
                                <label  class="form-label">Locomoción</label>
                                <input type="number" class="form-control" name="locomocion">
                            </div>
                            
                        </div>


                            <h3> Descuentos </h3>	

                        <div class="row mb-3">
                          
                            <div class="col-md-2">
                                <label  class="form-label">Anticipos</label>
                                <input type="number" class="form-control" name="anticipos">
                            </div>
                            <div class="col-md-2">
                                <label  class="form-label">Cuotas Restantes</label>
                                <input type="number" class="form-control" value="{{$empleado->cuotas_restantes_prestamo_cla}}" name="cuotas_restantes_prestamo_cla">
                            </div>
                     


                           
                        </div>
                
            
                
                        <hr>
                    
            
                
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                      

                   
                </div>
            </div>
        </div>
    </div>
@stop
