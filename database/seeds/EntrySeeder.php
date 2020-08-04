<?php

use App\Entry;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $spanish = DB::table('languages')->whereName('Español')->value('id');

        Entry::create([
          'language_id' => $spanish,
          'title' => 'Abandono escolar',
          'definition' => 'El abandono o deserción escolar consiste en el hecho de que un porcentaje de los niños y jóvenes que van a la escuela dejan sus estudios. Lo hacen en un periodo en el que la enseñanza es todavía obligatoria y deberían permanecer en las aulas. La deserción es la acción de desertar. Según la RAE desertar implica abandonar las obligaciones o los ideales. O se refiere al dicho de un soldado que desampara sus banderas. La palabra escolar, por su parte, hace referencia a    aquello que es perteneciente o relativo al estudiante o a la escuela. Por otro lado, la acción de abandonar en la RAE también figura como sinónimo de desamparar, dejar un intento u ocupación y hasta caer de ánimos y rendirse a las adversidades y contratiempos. Al hablar de abandono escolar, hablamos de niños menores de edad que por diversas razones debieron dejar de cursar en su escuela, razón por la que los verbos abandonar y desertar implican una consciencia, voluntad y responsabilidad que exceden las de los niños. La opinión general es que no es culpa de los niños. Un ejemplo claro es la nota del diario Clarín: “Abandono escolar: ya rescataron 3700 chicos y van por más”. Si lo que se hizo fue rescatarlos, ¿dónde está la voluntad para llevar a cabo la acción de desertar? Los especialistas en educación analizan el problema y consideran que los motivos son diversos. Uno de ellos es el fracaso escolar, niños que por alguna razón no se adaptan a la enseñanza oficial y renuncian a ella. En esos casos, hay unas circunstancias relacionadas: la responsabilidad de los padres y fallos en el sistema educativo, entre otros. Por último, las palabras "deserción" y "abandono" tienen un dejo de definitivo en ellas. Un soldado que desierta no puede volver y es difícil retornar a algo que se abandonó.',
          'recomendation' => 'Proponemos evitar el uso de la expresión Abandono escolar y recomendamos usar la expresión “Interrupción de estudios obligatorios”. La interrupción es una situación temporal, no definitiva que puede dar una luz distinta en el asunto. Otra expresión posible "Niños que se vieron forzados a dejar la educación obligatoria" o "Niños que no han podido continuar sus estudios". Es importante recordar que si podemos explicar o extendernos más en las causas de esta interrupción en los estudios, la información podrá ser más precisa.',
          'state_id' => 1,
        ]);


        Entry::create([
          'language_id' => $spanish,
          'title' => 'Aborígenes',
          'definition' => 'Aborigen (del plural latino aborigĭnes, ‘desde los orígenes’ en el sentido de ‘originario del suelo donde vive’1 ) pertenece a una cultura que ya no es la predominante en un lugar y que ha cedido lugar a una nueva. Según la Real Academia Española, "Habitante de un lugar, por contraposición al establecido posteriormente en él."',
          'recomendation' => 'Se usa habitualmente para referirse a los pueblos indígenas de Australia.',
          'state_id' => 2,
        ]);
    }
}
