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
                'token' => 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOlwvXC9sb2NhbGhvc3Q6ODAwMFwvYXBpXC9hdXRoXC9sb2dpbiIsImlhdCI6MTU3NTc3Mzk2OCwibmJmIjoxNTc1NzczOTY4LCJqdGkiOiJwM3lnQ2dhQlBjV0QxTFE0Iiwic3ViIjoxLCJwcnYiOiI4N2UwYWYxZWY5ZmQxNTgxMmZkZWM5NzE1M2ExNGUwYjA0NzU0NmFhIn0.oPU3EMy-nXa2ksDT7o0M0MJ31-ygfUdYVwyz6k0CDTM',
                'created_at' => '2019-12-08 09:48:45',
                'updated_at' => '2019-12-08 09:59:28',
            ),
            1 => 
            array (
                'id' => '3',
                'username' => 'admin',
                'email' => 'admin@mail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7qlteYQRdw17.QH/IftW2.4iSPezUNHFvbm2XWeJ60m8O6OV0CHQe',
                'role_id' => '2',
                'token' => NULL,
                'created_at' => '2019-12-08 10:09:19',
                'updated_at' => '2019-12-08 10:09:19',
            ),
        ));
        
        
    }
}