<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EntryUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $EntryUser = DB::table('entry_user');

        $EntryUser->insert([
            'user_id' => 3,
            'entry_id' => 1,
            'isAuthor' => true,
        ]);
        $EntryUser->insert([
            'user_id' => 2,
            'entry_id' => 1,
        ]);

        $EntryUser->insert([
            'user_id' => 2,
            'entry_id' => 2,
            'isAuthor' => true,
        ]);
        $EntryUser->insert([
            'user_id' => 3,
            'entry_id' => 2,
        ]);
    }
}
