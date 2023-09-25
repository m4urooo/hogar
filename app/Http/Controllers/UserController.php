<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $usuarios=User::all();
        $heads=[
            'ID',
            'Nombre',
            'Email',
            ['label' => 'Acciones', 'no-export' => true, 'width' => 15],

            


        ];



        return view('usuarios.index', compact('usuarios','heads'));
    }

    public function edit($id)
    {
        $user= User::find($id);
       
        return view('usuarios.edit',compact('user'));
    }

    
}
