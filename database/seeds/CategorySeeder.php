<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Category::create([
        'name' => 'Adicciones',
      ]);
      Category::create([
        'name' => 'Adopción',
      ]);
      Category::create([
        'name' => 'Adultos mayores',
      ]);
      Category::create([
        'name' => 'Conflictos armados',
      ]);
      Category::create([
        'name' => 'Crisis humanitaria',
      ]);
      Category::create([
        'name' => 'Desnutrición',
      ]);
      Category::create([
        'name' => 'Discapacidad',
      ]);
      Category::create([
        'name' => 'Discriminación',
      ]);
      Category::create([
        'name' => 'Discriminación política',
      ]);
      Category::create([
        'name' => 'Educación',
      ]);
      Category::create([
        'name' => 'Género',
      ]);
      Category::create([
        'name' => 'Migración',
      ]);
      Category::create([
        'name' => 'Niñez',
      ]);
      Category::create([
        'name' => 'Pobreza',
      ]);
      Category::create([
        'name' => 'Pueblos indígenas',
      ]);
      Category::create([
        'name' => 'Racismo',
      ]);
      Category::create([
        'name' => 'Trabajo',
      ]);
      Category::create([
        'name' => 'VIH y Sida',
      ]);
      Category::create([
        'name' => 'Violencia',
      ]);
      Category::create([
        'name' => 'Violencia de Género',
      ]);
      Category::create([
        'name' => 'Violencia en el depórte',
      ]);
      Category::create([
        'name' => 'Vivienda',
      ]);
      Category::create([
        'name' => 'Genre',
      ]);
      Category::create([
        'name' => 'Handicaps',
      ]);
      Category::create([
        'name' => 'Maladies mentales',
      ]);
      Category::create([
        'name' => 'Orientation sexuelle',
      ]);
      Category::create([
        'name' => 'Personnes âgées',
      ]);
      Category::create([
        'name' => 'Aesthetic discrimination',
      ]);
      Category::create([
        'name' => 'Armed Conflict',
      ]);
      Category::create([
        'name' => 'Disability',
      ]);
      Category::create([
        'name' => 'Discrimination',
      ]);
      Category::create([
        'name' => 'Gender',
      ]);
      Category::create([
        'name' => 'Gender violence',
      ]);
      Category::create([
        'name' => 'Humanitarian Crisis',
      ]);
      Category::create([
        'name' => 'Inmigration',
      ]);
      Category::create([
        'name' => 'Indigenous Peoples',
      ]);
      Category::create([
        'name' => 'Racism',
      ]);
      Category::create([
        'name' => 'Sexuality',
      ]);
      Category::create([
        'name' => 'Violence',
      ]);
    }
}
