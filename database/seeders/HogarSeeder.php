<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hogar;


class HogarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Departament::create([
            'nombre_hogar'=> 'Ruca Suyai'
        ]);
        Departament::create([
            'nombre_hogar'=> 'Las Parras'
        ]);
       
    }
}
