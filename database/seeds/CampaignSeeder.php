<?php

use App\Campaign;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CampaignSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campaign::create([
          'title' => 'Campaña contra el abandono de estudios',
          'description' => 'lorem ipsum',
          'link' => 'http://www.cbtis233.mx/escolares/campana-abandono-escolar-sigue-estudiando/',
          'entry_id' => 1
          ]);

        Campaign::create([
          'title' => 'Campaña a favor de los pueblos originarios',
          'description' => 'lorem ipsum',
          'link' => 'https://www.survival.es/indigenas',
          'entry_id' => 1
        ]);
    }
}
