<?php

use Illuminate\Database\Seeder;
use App\DocumentType;

class DocumentTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DocumentType::create([
          'name' => 'DNI',
        ]);

        DocumentType::create([
          'name' => 'RUC',
        ]);
    }
}
