<?php

use Illuminate\Database\Seeder;
use App\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //Esto hay que ver bien todas las opciones que pueden tener los States
        //Están en Español ya que va ser lo que vean los Administrados al momento de cambiarle el State 
        State::create([
            'name' => 'Visible',
        ]);
        State::create([
            'name' => 'Oculto',
        ]);
        State::create([
            'name' => 'Verificado',
        ]);
        State::create([
            'name' => 'Rechazado',
        ]);
        //Puse estos como ejemplo, sacarle y/o agregarle más, si se necesita.
    }
}
