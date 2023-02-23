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
                'id' => 1,
                'name' => 'garobcsi',
                'email' => 'example@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$7pw6iAdUHxXxTT3lQiYqKOtJe2XJfy.w.w0w3ATNDIphObXuLzf56',
                'remember_token' => NULL,
                'created_at' => '2023-02-21 12:24:41',
                'updated_at' => '2023-02-21 12:24:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$QI2t.G9U847U7BdWmULAeu3bCGzXr1vm.3SWMW2Dui/VHtZtWNrbi',
                'remember_token' => NULL,
                'created_at' => '2023-02-22 12:41:31',
                'updated_at' => '2023-02-22 12:41:31',
            ),
        ));
        
        
    }
}