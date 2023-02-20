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
                'abilities' => '["*"]',
                'created_at' => '2023-02-20 14:52:36',
                'expires_at' => NULL,
                'id' => 1,
                'last_used_at' => '2023-02-20 14:55:12',
                'name' => 'auth_token',
                'token' => 'bb866b298fb2e4207fa6ad4ab763209efb25336eb4f835b287c7666980fcdfe6',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-02-20 14:55:12',
            ),
        ));
        
        
    }
}