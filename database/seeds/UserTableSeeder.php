<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * 
     */
    public function run()
    {
        User::create([
        	'username' => 'Hannah Lim',
        	'email' => 'hnhmlim@gmail.com',
        	'password' => Hash::make('pass'),
        	'firstname' => 'Hannah',
        	'lastname' => 'Lim',
        ]);

         User::create([
        	'username' => 'Jhon Doe',
        	'email' => 'johndoe@gmail.com',
        	'password' => Hash::make('pass'),
        	'firstname' => 'Jhon',
        	'lastname' => 'Doe',
        ]);
    }
}
