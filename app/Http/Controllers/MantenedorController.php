<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salud;



class MantenedorController extends Controller
{
    public function index()
    {
        $salud = Salud::all();
        $heads=[
            'ID',
            'Nombre',
            'Valor',
            

            


        ];
        return view('mantenedores.index',compact('salud','heads'));
    }
}
