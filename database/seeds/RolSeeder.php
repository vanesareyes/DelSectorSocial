<?php

use App\Rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
          'name' => 'admin',
        ]);
        Rol::create([
          'name' => 'usuario',
        ]);
        Rol::create([
          'name' => 'invitado',
        ]);
    }
}