<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'  => 'বিনোদন', 
            'slug'  => 'entertainment'
        ]);

        DB::table('categories')->insert([
            'name'  => 'জীবন যাপন', 
            'slug'  => 'lifestyle'
        ]);

        DB::table('categories')->insert([
            'name'  => 'বিস্ময়কর', 
            'slug'  => 'amazing'
        ]);
    }
}
