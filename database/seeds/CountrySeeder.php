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
        'Name' => 'Argentina',
      ]);
      Country::create([
        'Name' => 'Colombia',
      ]);
      Country::create([
        'Name' => 'España',
      ]);
      Country::create([
        'Name' => 'Perú',
      ]);
      Country::create([
        'Name' => 'Venezuela',
      ]);
      Country::create([
        'Name' => 'Francia',
      ]);
      Country::create([
        'Name' => 'Suiza',
      ]);
      Country::create([
        'Name' => 'Estados Unidos',
      ]);
    }
}
