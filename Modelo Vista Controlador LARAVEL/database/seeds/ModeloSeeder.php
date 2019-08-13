<?php

use App\Modelo;
use Illuminate\Database\Seeder;

class ModeloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Modelo::create([
            'nombre'=>'Un nombre',


        ]);
    }
}
