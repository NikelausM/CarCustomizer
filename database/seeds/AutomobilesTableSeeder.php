<?php

use Illuminate\Database\Seeder;

class AutomobilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      // Insert Automobile data into Automobile table
      \App\Automobile::create(array(
          'brand' => 'Lamborghini',
          'model' => 'Aventador S',
          'year' => 2020,
      ));

      \App\Automobile::create(array(
          'brand' => 'Lamborghini',
          'model' => 'Huracán Evo',
          'year' => 2020,
      ));

      \App\Automobile::create(array(
          'brand' => 'Lamborghini',
          'model' => 'Urus',
          'year' => 2020,
      ));
    }
}
