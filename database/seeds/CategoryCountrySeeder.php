<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

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

        //ARRAYS COUNTRIES ID//
        $catsInSpanish = [$argentinaId, $colombiaId, $españaId, $peruId, $venezuelaId];
        $catsInFrench = [$franciaId, $suizaId];
        $catsInEnglish = [$estadosUnidosId];

        $catsInCountries = [ $catsInSpanish, $catsInFrench, $catsInEnglish];

        //CATEGORIES//
        $categories = Category::all();

        foreach($catsInCountries as $catsInCountry)
        {
          foreach($catsInCountry as $country)
          {
            if($country < 6){
              foreach($categories as $category)
              {
                $catego_id = $category->id;
                if($catego_id < 23){
                  DB::table('category_country')->insert([
                    'category_id' => $catego_id,
                    'country_id' => $country
                  ]);
                }
              }
            }elseif($country > 5 && $country < 8){
               foreach($categories as $category)
               {
                 $catego_id = $category->id;
                 if($catego_id > 22 && $catego_id < 28){
                   DB::table('category_country')->insert([
                     'category_id' => $catego_id,
                     'country_id' => $country
                   ]);
                 }
               }
             }else{
               foreach($categories as $category)
               {
                 $catego_id = $category->id;
                 if($catego_id > 27){
                   DB::table('category_country')->insert([
                     'category_id' => $catego_id,
                     'country_id' => $country
                   ]);
            }
          }
        }
      }
    }
  }
}
