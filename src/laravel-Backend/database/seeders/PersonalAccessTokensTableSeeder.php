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
                'created_at' => '2023-02-19 14:21:43',
                'expires_at' => NULL,
                'id' => 1,
                'last_used_at' => '2023-02-19 14:33:14',
                'name' => 'auth_token',
                'token' => 'd37f2ba8d50e5ee59a156cb62d8fb0161d7079d0aa648dae02424ca9c2d3d2a6',
                'tokenable_id' => 1,
                'tokenable_type' => 'App\\Models\\User',
                'updated_at' => '2023-02-19 14:33:14',
            )
        ));


    }
}
