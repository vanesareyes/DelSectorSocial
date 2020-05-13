<?php

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
        DB::table('campaigns')->insert([
          'title' => 'Campaña contra el abandono de estudios',
          'description' => 'lorem ipsum',
          'link' => 'http://www.cbtis233.mx/escolares/campana-abandono-escolar-sigue-estudiando/',
        ]);

        DB::table('campaigns')->insert([
          'title' => 'Campaña a favor de los pueblos originarios',
          'description' => 'lorem ipsum',
          'link' => 'https://www.survival.es/indigenas',
        ]);
    }
}
