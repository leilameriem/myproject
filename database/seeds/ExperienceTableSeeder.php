<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //



        \DB::table('experiences')->insert([
        	'cv_id' => 1,
        	
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);



        \DB::table('experiences')->insert([
        	'cv_id' => 1,
        	
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]);
    }
}
