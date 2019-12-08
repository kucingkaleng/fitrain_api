<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => '1',
                'username' => 'general',
                'email' => 'general@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$8IKlCoYYEhfoVYosNfnSvuyqDu3kHPe9.Oyzx/At8zUZWoqoyR5eq',
                'role_id' => '1',
                'token' => NULL,
                'created_at' => '2019-12-08 09:48:45',
                'updated_at' => '2019-12-08 09:48:45',
            ),
        ));
        
        
    }
}