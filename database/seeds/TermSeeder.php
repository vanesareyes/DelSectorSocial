<?php

use Illuminate\Database\Seeder;
use App\Recommendedterm;
class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Recommendedterm::create([
            'name' => 'Interrupción de estudios obligatorios',
            'entry_id' => 1,
            'country_id' => 1,
        ]);
       Recommendedterm::create([
            'name' => 'Niños que se vieron forzados a dejar la educación obligatoria',
            'entry_id' => 1,
            'country_id' => 1,
        ]);

        Recommendedterm::create([
            'name' => 'Pueblos originarios',
            'entry_id' => 2,
            'country_id' => 1,
        ]);
       Recommendedterm::create([
            'name' => 'Pueblos indígenas',
            'entry_id' => 2,
            'country_id' => 1,
        ]);
    }
}
