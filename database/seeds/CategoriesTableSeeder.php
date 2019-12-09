<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => '1',
                'name' => 'Web Programming',
            ),
            1 => 
            array (
                'id' => '2',
                'name' => 'Mobile Programming',
            ),
            2 => 
            array (
                'id' => '3',
                'name' => 'Aplikasi Perkantoran',
            ),
        ));
        
        
    }
}