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
      ]);
      Language::create([
        'name' => 'Inglés',
      ]);
      Language::create([
        'name' => 'Francés',
      ]);
    }
}
