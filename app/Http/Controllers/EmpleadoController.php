<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use RealRashid\SweetAlert\Facades\Alert;



class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados=Empleado::all();
        $heads=[
            'ID',
            'Nombre',
            'Email',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 15],

            


        ];


        
        return view('empleados.index', compact('empleados','heads'));
    }

    public function edit($id)
    {
        $empleado= Empleado::find($id);
       
        return view('empleados.edit',compact('empleado'));
    }

    public function new(){

        return view('empleados.new');
    }

    public function store(Request $request)
    {
        $empleado= new Empleado($request->All());

        $empleado->save();
        Alert::success('Éxito!', 'Los archivos se subieron');

      

        return redirect()->route('empleados.index')->with('fireAlert', true);;

    }

    public function update(Request $request, $id)
    {
        
        $empleado = Empleado::find($id);
        $empleado->update($request->all());

        return redirect()->route('empleados.index')
            ->with('success', 'Post updated successfully.');

    }

}
