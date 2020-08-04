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
        $spanishCountries = [$argentinaId, $colombiaId, $españaId, $peruId, $venezuelaId];
        $frenchCountries = [$franciaId, $suizaId];
        $englishCountries = [$estadosUnidosId];

        $arrayOfCountries = [ $spanishCountries, $frenchCountries, $englishCountries];

      //CATEGORIES//
        $categories = Category::all();

        foreach($arrayOfCountries as $countries)
        {
          foreach($countries as $country)
          {
            if($country < 6)
            {
              foreach($categories as $category)
              {
                $category_id = $category->id;
                if($category_id < 23)
                {
                  DB::table('category_country')->insert([
                    'category_id' => $category_id,
                    'country_id' => $country
                  ]);
                }
              }
            }elseif($country > 5 && $country < 8){
               foreach($categories as $category)
               {
                 $category_id = $category->id;
                 if($category_id > 22 && $category_id < 28){
                   DB::table('category_country')->insert([
                     'category_id' => $category_id,
                     'country_id' => $country
                   ]);
                 }
               }
             }else{
               foreach($categories as $category)
               {
                 $category_id = $category->id;
                 if($category_id > 27){
                   DB::table('category_country')->insert([
                     'category_id' => $category_id,
                     'country_id' => $country
                   ]);
                  }
                }
              }
        }
      }
    }
}
