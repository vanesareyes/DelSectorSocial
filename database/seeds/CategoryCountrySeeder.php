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
        $argentinaID = DB::table('countries')->whereName('Argentina')->value('id');
        $colombiaID = DB::table('countries')->whereName('Colombia')->value('id');
        $españaID = DB::table('countries')->whereName('España')->value('id');
        $peruID = DB::table('countries')->whereName('Perú')->value('id');
        $venezuelaID = DB::table('countries')->whereName('Venezuela')->value('id');
        $franciaID = DB::table('countries')->whereName('Francia')->value('id');
        $suizaID = DB::table('countries')->whereName('Suiza')->value('id');
        $estadosUnidosID = DB::table('countries')->whereName('Estados Unidos')->value('id');

        //CATEGORIES//
        $catsInSpanish = DB::table('categories')->select('name')->where('id', '<', 23)->get();
        $catsInFrench = DB::table('categories')->select('name')->where('id', '>', 22)->where('id', '<', 28)->get();
        $catsInEnglish = DB::table('categories')->select('name')->where('id', '>', 27)->get();



        for($i = 0; $i < 23; $i++){
          dd($catsInSpanish[$i]->name);
        }


        // DB::table('category_country')->insert([
        //   'category_id' => $cat,
        //   'country_id' => $argentinaID
        // ]);

    }
}
