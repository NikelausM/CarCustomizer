<?php

use Illuminate\Database\Seeder;

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
        \App\User::create(array(
            'username' => 'Nicolas',
            'password' => '123',
        ));

        \App\User::create(array(
            'username' => 'Naweed',
            'password' => '456',
        ));

        \App\User::create(array(
            'username' => 'Afrah',
            'password' => '789',
        ));

        \App\User::create(array(
            'username' => 'Kavinda',
            'password' => '789',
        ));

    }
}
