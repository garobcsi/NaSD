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
                'created_at' => '2023-02-19 12:11:31',
                'email' => 'example@gmail.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'garobcsi',
                'password' => '$2y$10$MO/E0ygo0Mgi7Ilix3Sriu3X1hDT0brSWq.KECxhIDt9ibXNx4cBu',
                'remember_token' => NULL,
                'updated_at' => '2023-02-19 12:11:31',
            ),
            1 => 
            array (
                'created_at' => '2023-02-19 12:14:49',
                'email' => 'examplea@gmail.com',
                'email_verified_at' => NULL,
                'id' => 2,
                'name' => 'garobcsia',
                'password' => '$2y$10$0SRpev7VLP2uf9CtIqCfIOttP2Obfgz92HrGKbWasbUFkqUjMNe1K',
                'remember_token' => NULL,
                'updated_at' => '2023-02-19 12:14:49',
            ),
        ));
        
        
    }
}