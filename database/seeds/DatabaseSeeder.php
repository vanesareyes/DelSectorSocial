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
        'users',
        'states',
        'categories',
        'languages',
        'countries',
        'category_country',
        'entries',
        'country_entry',
        'entry_user',
        'category_entry',
        'recommendedterms',
        'campaigns',
        'sources'
      ]);
      $this->call([
        RoleSeeder::class,
        UserSeeder::class,
        StateSeeder::class,
        LanguageSeeder::class,
        CategorySeeder::class,
        CountrySeeder::class,
        CategoryCountrySeeder::class,
        EntrySeeder::class,
        ContryEntrySeeder::class,
        EntryUserSeeder::class,
        CategoryEntrySeeder::class,
        // RecommendedtermSeeder::class,
        TermSeeder::class,
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
