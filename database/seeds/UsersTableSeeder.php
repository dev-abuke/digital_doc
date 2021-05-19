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
        //\App\User::truncate();
        \App\User::create([
            'name' => 'Super Admin',
            'username' => 'abrham',
            'password' => bcrypt('ab1475'),
            'status' => config('constants.STATUS.ACTIVE')
        ]);
    }
}
