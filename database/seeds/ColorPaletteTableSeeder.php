<?php

use Illuminate\Database\Seeder;
use App\ColorPalette;

class ColorPaletteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ColorPalette::create(array(
          'automobile_id' => 1,
      ));
    }
}
