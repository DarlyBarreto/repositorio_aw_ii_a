<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Seeder;

class VehiculoSeeder extends Seeder
{
    public function run()
    {
        Vehiculo::create(['tipo_de_vehiculo' => 'Auto', 'categoria' => 'Sedan']);
        Vehiculo::create(['tipo_de_vehiculo' => 'Moto', 'categoria' => 'Deportiva']);
        Vehiculo::create(['tipo_de_vehiculo' => 'Camión', 'categoria' => 'Carga']);
    }
}
