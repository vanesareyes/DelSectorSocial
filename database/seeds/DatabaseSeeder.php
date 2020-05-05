<?php

use Illuminate\Database\Seeder;

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
        'category_country'
      ]);
      $this->call([
        RoleSeeder::class,
        LanguageSeeder::class,
        CountrySeeder::class,
        CategorySeeder::class,
        CategoryCountrySeeder::class,
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
