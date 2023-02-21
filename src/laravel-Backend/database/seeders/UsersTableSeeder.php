<?php

namespace Database\Seeders;

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
                'created_at' => '2023-02-21 12:24:41',
                'email' => 'example@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'garobcsi',
                'password' => '$2y$10$7pw6iAdUHxXxTT3lQiYqKOtJe2XJfy.w.w0w3ATNDIphObXuLzf56',
                'remember_token' => NULL,
                'updated_at' => '2023-02-21 12:24:41',
            ),
        ));
        
        
    }
}