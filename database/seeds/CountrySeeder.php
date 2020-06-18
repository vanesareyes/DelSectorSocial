<?php

use App\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $spanish = DB::table('languages')->whereName('Español')->value('id');
      $english = DB::table('languages')->whereName('Inglés')->value('id');
      $french = DB::table('languages')->whereName('Francés')->value('id');

      Country::create([
        'name' => 'Argentina',
        'flag' => './css/home/img/Argentina.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Colombia',
        'flag' => './css/home/img/Colombia.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'España',
        'flag' => './css/home/img/España.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Perú',
        'flag' => './css/home/img/Peru.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Venezuela',
        'flag' => './css/home/img/Venezuela.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Francia',
        'flag' => './css/home/img/Francia.png',
        'language_id' => $french
      ]);
      Country::create([
        'name' => 'Suiza',
        'flag' => './css/home/img/Suiza.png',
        'language_id' => $french
      ]);
      Country::create([
        'name' => 'Estados Unidos',
        'flag' => './css/home/img/EEUU.png',
        'language_id' => $english
      ]);
    }
}
