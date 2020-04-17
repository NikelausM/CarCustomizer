<?php

use Illuminate\Database\Seeder;
use App\Color;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Color::create(array(
          'name' => 'Bianco Isi',
          'hex' => '#E8E8E8',
      ));

      Color::create(array(
        'name' => 'Giallo Spica',
        'hex' => '#FEBE52',
      ));

      Color::create(array(
        'name' => 'Verde Scandal',
        'hex' => '#BAD437',
      ));

      Color::create(array(
        'name' => 'Nero Ade',
        'hex' => '#2D2D2D',
      ));

      Color::create(array(
        'name' => 'Bianco Leda',
        'hex' => '#C4BCB6',
      ));

      Color::create(array(
        'name' => 'Blu Glauco',
        'hex' => '#00A9A4',
      ));

      Color::create(array(
        'name' => 'Rosso Leto',
        'hex' => '#AB2A31',
      ));

      Color::create(array(
        'name' => 'Sabbia Nefertem',
        'hex' => '#C4A06F',
      ));
    }
}
