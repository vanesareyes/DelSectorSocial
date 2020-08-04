<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoryEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $CategoryEntry = DB::table('category_entry');

       $CategoryEntry->insert([
            'category_id' => 10,
            'entry_id' => 1
       ]);

       $CategoryEntry->insert([
            'category_id' => 15,
            'entry_id' => 2
        ]);
    }
}
