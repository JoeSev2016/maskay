<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
          'name' => 'Muebles',
        ]);

        Tag::create([
          'name' => 'Vestidos',
        ]);

        Tag::create([
          'name' => 'Costura',
        ]);

        Tag::create([
          'name' => 'Electricidad',
        ]);

        Tag::create([
          'name' => 'Sofas',
        ]);

        Tag::create([
          'name' => 'Gasfitero',
        ]);

        Tag::create([
          'name' => 'Tortas',
        ]);

        Tag::create([
          'name' => 'Maquillaje',
        ]);
    }
}
