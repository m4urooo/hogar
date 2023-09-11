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
        Hogar::create([
            'nombre_hogar'=> 'Ruca Suyai'
        ]);
        Hogar::create([
            'nombre_hogar'=> 'Las Parras'
        ]);
       
    }
}
