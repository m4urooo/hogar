<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Empleado;
use Illuminate\Support\Facades\DB;


class PDFController extends Controller
{
    public function getPDF(Request $request)
    {
       // dd($request);
		$name ="Juanito Perez";
        $customPaper = array(10.0, 10.0, 1212.00, 1208.00);

		// $pdf = PDF::loadView('pdf.getPDF', compact('name'))->setPaper('$customPaper');
		$pdf = PDF::loadView('pdf.getPDF', compact('name'));
		return $pdf->stream('pdf');
	}

    public function crear(Empleado $empleado)
    {
         $todos= Empleado::all();
        // foreach($todos as $todo)
        // {
        //     print($todo);
        // }
        // dd($todos['name']);
         return view('pdf.crear',compact('todos'));

    }

    public function crearPDF(Request $request, Empleado $empleado)
    {
        $datos=$request->all();
        $id_empleado= $datos['id_empleado'];

        $usuario = Empleado::find($id_empleado);
        // dd($usuario);

        // dd($usuario);
        // dd($id_empleado);

        //$id_empleado= $datos['id_empleado'];
        $empleado->fill($request->all());
        // $user = DB::Empleados('id');
        // dd($user);

        $empleado->fill($request->all());

        // dd($empleado);
      
        // $emple = $empleado->name;
        // dd($emple);

        $dias_trabajados = $datos['dias_trabajados'];
        $horas_trabajadas = $datos['horas_trabajadas'];
        $horas_extras = $datos['horas_extras'];
        $aguinaldo_bonos = $datos['aguinaldo_bonos'];

        $string_value=($usuario->sueldo_base/30)*9;
        
        //dd(number_format($string_value)); FUNCIONANDO
        $number_value = (float)$string_value;


        $sueldo_total=($usuario->sueldo_base / 30)* $dias_trabajados;

        $sueldo= $usuario->sueldo_base;
        $sueldoformat=number_format($sueldo);

        $sueldodiv30 = $sueldo/30;
        //dd(number_format($sueldodiv30));
        $horaexformat=$usuario->valor_hora_ex;
        $horaexformat=number_format($horaexformat);

        $valorafpformat=$usuario->valor_afp;
       // number_format($valorafpformat);
        // dd($valorafpformat);
        // dd($usuario->valor_afp);
        
        // $valorafpformat=$usuario->valor_afp;
        // $valorafpformat=number_format($valorafpformat);


        $newNumber = substr_replace($sueldo_total, ".", -3, 0);   

        //$sueldo_total=number_format($sueldo_total,2);
        // $id_empleado= $datos['id_empleado'];

       // dd($datos);

       $sueldodiv30format=number_format($sueldodiv30);
       //dd($sueldodiv30);

     
       $total_imponible= ( $horas_extras * $usuario->valor_hora_ex) + ($sueldodiv30*$dias_trabajados);
      
        $descuento_afp= ($total_imponible *$usuario->valor_afp)/100;
        $descuento_afp=number_format($descuento_afp);

        $descuento_salud=($total_imponible *$usuario->valor_salud)/100;
        $descuento_salud=number_format($descuento_salud);

        $descuento_caja=($total_imponible *$usuario->valor_caja_comp)/100;
        $descuento_caja=number_format($descuento_caja);

        $total_horas_extras=$horas_extras * $usuario->valor_hora_ex;
        $total_horas_extras=number_format($total_horas_extras);
    //    dd($descuento_salud);

		// $pdf = PDF::loadView('pdf.getPDF', compact('name'))->setPaper('$customPaper');
		$pdf = PDF::loadView('pdf.getPDF', compact('descuento_caja','descuento_afp','total_horas_extras','descuento_salud',
        'total_imponible','valorafpformat','sueldodiv30','usuario','sueldo',
        'sueldoformat','horaexformat','newNumber','sueldo_total',
        'dias_trabajados','horas_trabajadas','horas_extras','aguinaldo_bonos'));
		return $pdf->stream('pdf');
    }
}
