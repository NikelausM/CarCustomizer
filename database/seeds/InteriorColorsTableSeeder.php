<?php

use Illuminate\Database\Seeder;
use App\InteriorColor;

class InteriorColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      InteriorColor::create(array(
          'url' => 'https://s3.amazonaws.com/lamborghini.live.2dod.us-east-1/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/0f35284e6bbeb8108d3364c09593727fee896029_1920x1080.jpg',
          'color_id' => 4,
          'color_palette_id' => 1,
      ));

      InteriorColor::create(array(
          'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/967fc8f1490f384cf5b749659bbffa220e5be5e9_1920x1080.jpg',
          'color_id' => 5,
          'color_palette_id' => 1,
      ));

      InteriorColor::create(array(
          'url' => 'https://configuratorimageslive.lamborghini.com/Lamborghini_Studio/lamborghini/aventador/2017/37f9011076466fe7/3f1d058c9f406dd199e5340ffb624ef24bb9ae3d_1920x1080.jpg',
          'color_id' => 8,
          'color_palette_id' => 1,
      ));
    }
}
