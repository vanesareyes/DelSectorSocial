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
      Country::create([
        'name' => 'Argentina',
      ]);
      Country::create([
        'name' => 'Colombia',
      ]);
      Country::create([
        'name' => 'España',
      ]);
      Country::create([
        'name' => 'Perú',
      ]);
      Country::create([
        'name' => 'Venezuela',
      ]);
      Country::create([
        'name' => 'Francia',
      ]);
      Country::create([
        'name' => 'Suiza',
      ]);
      Country::create([
        'name' => 'Estados Unidos',
      ]);
    }
}
