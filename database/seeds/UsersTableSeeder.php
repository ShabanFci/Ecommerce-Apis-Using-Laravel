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
        App\User::create([
            'name' => 'Shaban Admin',
            'password' => bcrypt('12345678'),
            'is_admin' => 1
        ]);

        App\User::create([
            'name' => 'Shaban',
            'password' => bcrypt('12345678'),
            'is_admin' => 0
        ]);
    }
}
