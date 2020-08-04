<?php

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $adminPrinId = DB::table('roles')->whereName('principalAdmin')->value('id');
      $adminId = DB::table('roles')->whereName('admin')->value('id');
      $userId = DB::table('roles')->whereName('user')->value('id');

        User::create([
          'name' => 'Administrador Principal',
          'last_name' => 'delsectorsocial',
          'email' => 'administradorPrincipal@gmail.com',
          'password' => bcrypt('administradorPrincipal'),
          'role_id' => $adminId
        ]);
        User::create([
          'name' => 'Administrador',
          'last_name' => 'delsectorsocial',
          'email' => 'administrador@gmail.com',
          'password' => bcrypt('administrador'),
          'role_id' => $adminId
        ]);
        User::create([
          'name' => 'Usuario',
          'last_name' => 'delsectorsocial',
          'email' => 'usuario@gmail.com',
          'password' => bcrypt('usuario'),
          'role_id' => $userId
        ]);
        User::create([
          'name' => 'Usuario1',
          'last_name' => 'delsectorsocial',
          'email' => 'usuario1@gmail.com',
          'password' => bcrypt('usuario1'),
          'role_id' => $userId
        ]);
        User::create([
          'name' => 'Usuario2',
          'last_name' => 'delsectorsocial',
          'email' => 'usuario2@gmail.com',
          'password' => bcrypt('usuario2'),
          'role_id' => $userId
        ]);
    }
}
