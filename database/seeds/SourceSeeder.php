<?php

use App\Source;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entryId = DB::table('entries')->whereTitle('Abandono escolar')->value('id');

        Source::create([
          'name' => 'Definición ABC de Deserción escolar',
          'link' => 'https://www.definicionabc.com/social/desercion-escolar.php',
          'entry_id' => $entryId
        ]);

        Source::create([
          'name' => 'Definición.de Deserción escolar',
          'link' => 'https://definicion.de/desercion-escolar/',
          'entry_id' => $entryId
        ]);

        Source::create([
          'name' => 'Abandono escolar: ya rescataron a 3.700 chicos y van por más',
          'link' => 'https://www.clarin.com/sociedad/desercion_escolar-secundaria_0_Sylo9VcPXl.html',
          'entry_id' => $entryId
        ]);
    }
}
