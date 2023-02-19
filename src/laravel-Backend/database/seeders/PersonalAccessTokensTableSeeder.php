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
                'created_at' => '2023-02-19 12:11:44',
                'expires_at' => NULL,
                'id' => 1,
                'last_used_at' => NULL,
                'name' => 'auth_token',
                'token' => 'a6368c1070c1c8998a0aaf4b453c354af1611ebc1812d3f732f542340e64686e',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-02-19 12:11:44',
            ),
            1 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2023-02-19 12:15:01',
                'expires_at' => NULL,
                'id' => 2,
                'last_used_at' => NULL,
                'name' => 'auth_token',
                'token' => 'eff8a6836e775f9a89af6bd624c421e767689cef9a9a93d0c551e6bb90ab58a6',
                'tokenable_id' => 2,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-02-19 12:15:01',
            ),
            2 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2023-02-19 12:15:07',
                'expires_at' => NULL,
                'id' => 3,
                'last_used_at' => NULL,
                'name' => 'auth_token',
                'token' => '6941a787756e18bc45be4493a1939d6d48c1cd7320e709abc89eeb25e9cc0f52',
                'tokenable_id' => 2,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-02-19 12:15:07',
            ),
            3 => 
            array (
                'abilities' => '["*"]',
                'created_at' => '2023-02-19 12:18:13',
                'expires_at' => NULL,
                'id' => 4,
                'last_used_at' => NULL,
                'name' => 'auth_token',
                'token' => '30d81ad1fa6be1b8e48c38ba8f5c7bd1de2874d8b1f8f42b706c96483910cfc5',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-02-19 12:18:13',
            ),
        ));
        
        
    }
}