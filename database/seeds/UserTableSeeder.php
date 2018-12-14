<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Jose Alberto',
        	'email' => 'jose281295@hotmail.com',
        	'password' => bcrypt('123123')
        ]);

        User::create([
            'name' => 'Rodrigo',
            'email' => 'rodrigoroti@gmail.com',
            'password' => bcrypt('123123')
        ]);
    }
}
