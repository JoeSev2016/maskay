<?php

use Illuminate\Database\Seeder;

use App\Department;
use App\Province;
use App\District;

class DistrictTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = factory(Department::class, 5)->create();
        $departments->each(function($department){
        	$provinces = factory(Province::class, 1)->make();
        	$department->provinces()->saveMany($provinces);
        	$provinces->each(function($province){
        		$districts = factory(District::class, 1)->make();
        		$province->districts()->saveMany($districts);
        	});
        });
    }
}
