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
        $entryId1 = DB::table('entries')->whereTitle('Abandono escolar')->value('id');
        $entryId2 = DB::table('entries')->whereTitle('Aborígenes')->value('id');

        //Abandono escolar//
        Source::create([
          'title' => 'Definición ABC de Deserción escolar',
          'link' => 'https://www.definicionabc.com/social/desercion-escolar.php',
          'entry_id' => $entryId1
        ]);

        Source::create([
          'title' => 'Definición de Deserción escolar',
          'link' => 'https://definicion.de/desercion-escolar/',
          'entry_id' => $entryId1
        ]);

        Source::create([
          'title' => 'Abandono escolar: ya rescataron a 3.700 chicos y van por más',
          'link' => 'https://www.clarin.com/sociedad/desercion_escolar-secundaria_0_Sylo9VcPXl.html',
          'entry_id' => $entryId1
        ]);



        //Aborígenes//
        Source::create([
          'title' => 'Wikipedia - Aborigen',
          'link' => 'https://es.wikipedia.org/wiki/Aborigen',
          'entry_id' => $entryId2
        ]);

        Source::create([
          'title' => 'Real Academia Española - Aborigen',
          'link' => 'https://dle.rae.es/aborigen',
          'entry_id' => $entryId2
        ]);

        Source::create([
          'title' => 'INADI Buenas Prácticas en la Comunicación Pública - Pueblos Indígenas',
          'link' => 'http://www.inadi.gob.ar/wp-content/uploads/2011/09/buenas-practicas-pueblos-indigenas.pdf',
          'entry_id' => $entryId2
        ]);

        Source::create([
          'title' => 'Terminología Survival',
          'link' => 'https://www.survival.es/conocenos/terminologia',
          'entry_id' => $entryId2
        ]);

        Source::create([
          'title' => 'Vocabulario solidario, qué palabras debemos evitar y por qué',
          'link' => 'https://www.consumer.es/solidaridad/vocabulario-solidario-que-palabras-debemos-evitar-y-por-que.html',
          'entry_id' => $entryId2
        ]);
    }
}
