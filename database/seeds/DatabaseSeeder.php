<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $this->truncateTables([
        'roles',
        'languages',
        'countries',
        'categories',
        'category_country',
        'users',
        'campaigns',
        'category_entry',
        'entries',
        'entry_user',
        'sources'
      ]);
      $this->call([
        RoleSeeder::class,
        UserSeeder::class,
        StateSeeder::class,
        CategorySeeder::class,
        LanguageSeeder::class,
        CountrySeeder::class,
        CategoryCountrySeeder::class,
        EntrySeeder::class,
        ContryEntrySeeder::class,
        EntryUserSeeder::class,
        CategoryEntrySeeder::class,
        RecommendedTermSeeder::class,
        CampaignSeeder::class,
        SourceSeeder::class,
        ]);

    }
      protected function truncateTables(array $tables)
      {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

        foreach($tables as $table) {
          DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
      }

}
