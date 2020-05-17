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
      $adminId = DB::table('roles')->whereName('admin')->value('id');
      $userId = DB::table('roles')->whereName('user')->value('id');

        User::create([
          'first_name' => 'Administrador',
          'last_name' => 'delsectorsocial',
          'email' => 'delsector@social.com',
          'password' => 'delsectorsocial',
          'role_id' => $adminId
        ]);
        User::create([
          'first_name' => 'Usuario',
          'last_name' => 'delsectorsocial',
          'email' => 'usuario@gmail.com',
          'password' => bcrypt('usuario'),
          'role_id' => $userId
        ]);
    }
}
