<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
        	'doc_num' => '20481658941',
        	'name' => 'Movil Tours',
        	'email' => 'gerencia@moviltours.com',
        	'address' => 'Av.Los Rosales 192',
        	'contact_number' => '999324098',
        	'district_id' => 1,
        	'user_id' => 1,
        	'document_id' => 2,
        ]);

        Customer::create([
        	'doc_num' => '20151458947',
        	'name' => 'Ani Desserts',
        	'email' => 'venta@anidesserts.com',
        	'address' => 'Calle Manglares 452',
        	'contact_number' => '956855423',
        	'district_id' => 2,
        	'user_id' => 2,
        	'document_id' => 2,
        ]);

        Customer::create([
        	'doc_num' => '24121658623',
        	'name' => 'Lizet SPA',
        	'email' => 'ventas@lizetspa.com',
        	'address' => 'Jr. Alarifes 765',
        	'contact_number' => '999324098',
        	'district_id' => 3,
        	'user_id' => 1,
        	'document_id' => 2,
        ]);

        Customer::create([
        	'doc_num' => '69584236',
        	'name' => 'Carito Store',
        	'email' => 'gerencia@caritostore.com',
        	'address' => 'Av.Los Rosales 192',
        	'contact_number' => '965685421',
        	'district_id' => 2,
        	'user_id' => 1,
        	'document_id' => 1,
        ]);
    }
}
