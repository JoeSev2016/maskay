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
            'last_name' => 'Apaza Sevilla',
        	'email' => 'jose281295@hotmail.com',
        	'password' => bcrypt('123123'),
            'address' => 'Calle Harold Crown 110',
            'cellphone' => '999132808',
            'district_id' => 1
        ]);

        User::create([
            'name' => 'Rodrigo',
            'last_name' => 'Delgado Apaza',
            'email' => 'rodrigorotti@Outlook.com',
            'password' => bcrypt('123123'),
            'address' => 'Calle Erick From 111',
            'cellphone' => '971424241',
            'district_id' => 1
        ]);
    }
}
