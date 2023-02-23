<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonalAccessTokensTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('personal_access_tokens')->delete();
        
        \DB::table('personal_access_tokens')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 1,
                'name' => 'auth_token',
                'token' => 'bb866b298fb2e4207fa6ad4ab763209efb25336eb4f835b287c7666980fcdfe6',
                'abilities' => '["*"]',
                'last_used_at' => '2023-02-20 14:55:12',
                'expires_at' => NULL,
                'created_at' => '2023-02-20 14:52:36',
                'updated_at' => '2023-02-20 14:55:12',
            ),
            1 => 
            array (
                'id' => 2,
                'tokenable_type' => 'App\\Models\\User',
                'tokenable_id' => 2,
                'name' => 'auth_token',
                'token' => 'd8d20b9ad270c32266d8e77218885f2fa94f3e2d6e14002981d24bd64b5f9e0c',
                'abilities' => '["*"]',
                'last_used_at' => '2023-02-22 13:05:29',
                'expires_at' => NULL,
                'created_at' => '2023-02-22 12:41:56',
                'updated_at' => '2023-02-22 13:05:29',
            ),
        ));
        
        
    }
}