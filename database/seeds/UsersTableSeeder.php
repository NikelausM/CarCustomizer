<?php

use Illuminate\Database\Seeder;
use App\User;
use App\CustomerRecord;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert user data into user table
        User::create(array(
            'username' => 'Nicolas',
            'password' => '123',
            'userable_id'=> 1,
            'userable_type'=> get_class(new CustomerRecord()),
        ));

        User::create(array(
            'username' => 'Naweed',
            'password' => '456',
            'userable_id'=> 1,
            'userable_type'=> get_class(new CustomerRecord()),
        ));

        User::create(array(
            'username' => 'Afrah',
            'password' => '789',
            'userable_id'=> 1,
            'userable_type'=> get_class(new CustomerRecord()),
        ));

        User::create(array(
            'username' => 'Kavinda',
            'password' => '789',
            'userable_id'=> 1,
            'userable_type'=> get_class(new CustomerRecord()),
        ));

    }
}
