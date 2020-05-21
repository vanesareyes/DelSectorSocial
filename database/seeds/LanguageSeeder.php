<?php

use App\Language;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Language::create([
        'name' => 'Español',
        'text' => 'Glosario de recomendaciones terminológicas
                   que busca cuestionar las expresiones
                   discriminatorias del lenguaje automático.'
      ]);
      Language::create([
        'name' => 'Inglés',
        'text' => 'Glossary of recommended terminology
                   that looks to question discriminatory
                   expressions and terms in e veryday language.'
      ]);
      Language::create([
        'name' => 'Francés',
        'text' => 'Glossaire de recommandations
                   terminologiques, qui cherche a interroger
                   les expressions discriminatoires
                   et stigmatisant du langage automatique.'
      ]);
    }
}
