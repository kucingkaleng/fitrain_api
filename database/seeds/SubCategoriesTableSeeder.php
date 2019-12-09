<?php

use Illuminate\Database\Seeder;

class SubCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sub_categories')->delete();
        
        \DB::table('sub_categories')->insert(array (
            0 => 
            array (
                'id' => '1',
                'category_id' => '1',
                'name' => 'Pemrograman PHP',
            ),
            1 => 
            array (
                'id' => '2',
                'category_id' => '1',
                'name' => 'Node JS',
            ),
            2 => 
            array (
                'id' => '3',
                'category_id' => '2',
                'name' => 'Pemrograman Android',
            ),
        ));
        
        
    }
}