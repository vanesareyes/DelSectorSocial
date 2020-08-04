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
          'entry_id' => 1,
          'link' => 'http://www.cbtis233.mx/escolares/campana-abandono-escolar-sigue-estudiando/',
          'state_id' => 1,
          ]);

        Campaign::create([
          'title' => 'Campaña a favor de los pueblos originarios',
          'entry_id' => 1,
          'link' => 'https://www.survival.es/indigenas',
          'state_id' => 1,
        ]);
    }
}
