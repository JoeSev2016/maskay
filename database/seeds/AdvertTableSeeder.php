<?php

use Illuminate\Database\Seeder;
use App\AdvertImage;
use App\Category;
use App\Advert;

class AdvertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// factory(\App\Category::class, 8)->create();
     //    factory(Advert::class, 50)->create();
     //    factory(AdvertImage::class, 100)->create();

    	$categories = factory(Category::class, 5)->create();// Creamos 5 categorias
    	$categories->each(function($category){ // Por cada categoria
    		$adverts = factory(Advert::class, 10)->make(); //Crea 20 anuncios
    		$category->adverts()->saveMany($adverts); //Asigna las categorias a cada anuncio
    		$adverts->each(function($ad){// Por cada anuncio 
    			$images = factory(AdvertImage::class, 2)->make(); // Crea 2 imagenes
    			$ad->images()->saveMany($images); // Asigna los anuncios a cada imagen
    		});
    	});

    }
}
