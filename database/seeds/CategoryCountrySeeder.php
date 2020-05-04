<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryCountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //COUNTRIES ID//
        $argentinaId = DB::table('countries')->whereName('Argentina')->value('id');
        $colombiaId = DB::table('countries')->whereName('Colombia')->value('id');
        $españaId = DB::table('countries')->whereName('España')->value('id');
        $peruId = DB::table('countries')->whereName('Perú')->value('id');
        $venezuelaId = DB::table('countries')->whereName('Venezuela')->value('id');
        $franciaId = DB::table('countries')->whereName('Francia')->value('id');
        $suizaId = DB::table('countries')->whereName('Suiza')->value('id');
        $estadosUnidosId = DB::table('countries')->whereName('Estados Unidos')->value('id');

        //CATEGORIES//
        $catsInSpanish = DB::table('categories')->select('name', 'id')->where('id', '<', 23)->get();
        $catsInFrench = DB::table('categories')->select('name', 'id')->where('id', '>', 22)->where('id', '<', 28)->get();
        $catsInEnglish = DB::table('categories')->select('name', 'id')->where('id', '>', 27)->get();


        DB::table('category_country')->insert([
          'category_id' => $catsInSpanish->first()->id,
          'country_id' => $argentinaId
        ]);

    }

    protected function getCategories ($categories, $countryID){
      foreach($categories as $category){
        DB::table('category_country')->insert([
          'category_id' => $category->id,
          'country_id' => $argentinaId
        ]);
      }
    }
}
