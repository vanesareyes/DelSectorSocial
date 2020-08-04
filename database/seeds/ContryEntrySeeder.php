<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ContryEntrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country_entry')->insert([
            'entry_id' => 1,
            'country_id' => 1,
        ]);
        
        DB::table('country_entry')->insert([
            'entry_id' => 2,
            'country_id' => 1,
        ]);
    }
}
