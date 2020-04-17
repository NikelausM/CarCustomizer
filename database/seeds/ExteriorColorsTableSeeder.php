<?php

use Illuminate\Database\Seeder;
use App\ExteriorColor;

class ExteriorColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ExteriorColor::create(array(
          'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/c7fc1d224d74916cc9145319be06accb5b4a01af_1300x700.jpg',
          'color_id' => 1,
          'color_palette_id' => 1,
      ));

      ExteriorColor::create(array(
          'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/08faf54c87803fb265391cfb3e7478ee017953f5_1300x700.jpg',
          'color_id' => 2,
          'color_palette_id' => 1,
      ));

      ExteriorColor::create(array(
          'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/6125e6a93c6428d788f7cb18b17b87565e0eceb2_1300x700.jpg',
          'color_id' => 3,
          'color_palette_id' => 1,
      ));

      ExteriorColor::create(array(
        'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/4bf45f90c1f5bb9894e83bfa30018535fdd68f7c_1300x700.jpg',
        'color_id' => 6,
        'color_palette_id' => 1,
      ));

      ExteriorColor::create(array(
        'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/d9cf3bd8bbcc3d68f27289ab20d358dd9f04262a_1300x700.jpg',
        'color_id' => 7,
        'color_palette_id' => 1,
      ));
    }
}
