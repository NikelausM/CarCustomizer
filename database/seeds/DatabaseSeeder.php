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
		$this->call([
					UsersTableSeeder::class,
          CustomerRecordsTableSeeder::class,
          AutomobilesTableSeeder::class,
          ColorsTableSeeder::class,
          ColorPalettesTableSeeder::class,
          ExteriorColorsTableSeeder::class,
          InteriorColorsTableSeeder::class,
          DesiredAutomobilesTableSeeder::class,
					]);
    }
}
