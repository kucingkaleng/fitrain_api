<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trainings')->delete();
        
        \DB::table('trainings')->insert(array (
            0 => 
            array (
                'id' => '1',
                'category_id' => '2',
                'sub_category_id' => '3',
                'name' => 'Pelatihan Pemrograman Android',
                'description' => 'Pelatihan Pemrograman Android fundamental dengan bahasa Java.',
                'duration' => NULL,
                'code' => 'PA1',
                'status' => '1',
                'created_at' => '2019-12-09 06:49:11',
                'updated_at' => '2019-12-09 06:49:11',
            ),
        ));
        
        
    }
}