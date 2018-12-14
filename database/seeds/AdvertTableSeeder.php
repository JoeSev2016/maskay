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

    	$categories = factory(Category::class, 5)->create();
    	$categories->each(function($category){
    		$adverts = factory(Advert::class, 20)->make();
    		$category->adverts()->saveMany($adverts);
    		$adverts->each(function($ad){
    			$images = factory(AdvertImage::class, 5)->make();
    			$ad->images()->saveMany($images);
    		});
    	});

    }
}
