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
          AutomobileTableSeeder::class,
          ColorTableSeeder::class,
          ColorPaletteTableSeeder::class,
          ExteriorColorPaletteTableSeeder::class,
          InteriorColorPaletteTableSeeder::class,
          DesiredAutomobileTableSeeder::class,
					]);
    }
}
