<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
use Hash;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'    => 'abdo ',
            'email'    => 'abdo@gmail.com',
            'password'   =>  Hash::make('password'),
            'remember_token' =>  str_random(10),
        ]);
    }
}
