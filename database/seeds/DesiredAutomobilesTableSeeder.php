<?php

use Illuminate\Database\Seeder;
use App\DesiredAutomobile;

class DesiredAutomobilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Insert DesiredAutomobile data into Desured_Automobile table
      DesiredAutomobile::create(array(
          'exterior_color_id' => 2,
          'interior_color_id' => 2,
          'listed_sale_price' => 299869.98,
          'actual_sale_price' => 299769.98,
          'discount' => 100,
          'discount_rationale' => 'Customer wants to buy the car this week',
          'automobile_id' => 1,
          'customer_record_id' => 1,
      ));
    }
}
