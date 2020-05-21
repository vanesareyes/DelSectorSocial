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
        'flag' => 'https://delsectorsocial.org/iconos-flags/Argentina.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Colombia',
        'flag' => 'https://delsectorsocial.org/iconos-flags/Colombia.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'España',
        'flag' => 'https://delsectorsocial.org/iconos-flags/Spain.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Perú',
        'flag' => 'https://delsectorsocial.org/iconos-flags/Peru.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Venezuela',
        'flag' => 'https://delsectorsocial.org/iconos-flags/Venezuela.png',
        'language_id' => $spanish
      ]);
      Country::create([
        'name' => 'Francia',
        'flag' => 'https://delsectorsocial.org/iconos-flags/France.png',
        'language_id' => $french
      ]);
      Country::create([
        'name' => 'Suiza',
        'flag' => 'https://delsectorsocial.org/iconos-flags/Switzerland.png',
        'language_id' => $french
      ]);
      Country::create([
        'name' => 'Estados Unidos',
        'flag' => 'https://delsectorsocial.org/iconos-flags/USA.png',
        'language_id' => $english
      ]);
    }
}
