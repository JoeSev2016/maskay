<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdvertTableSeeder::class);
        $this->call(DistrictTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(DocumentTypeTableSeeder::class);
        $this->call(TagTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
    }
}
