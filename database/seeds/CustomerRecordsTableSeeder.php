<?php

use Illuminate\Database\Seeder;
use App\CustomerRecord;

class CustomerRecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      CustomerRecord::create(array(
        'name' => 'Nicolas',
    		'gender' => 'male',
    		'billing_address' => '123 University Drive Calgary, AB, Canada',
    		'telephone_during_day' => 4031255569,
    		'telephone_during_evening' => 4035587895,
    		'email' => 'nick@gmail.com',
        'payment_status' => 'full payment',
        'designated_sales_person' => 1,
        'user_id' => 1,
      ));
    }
}
