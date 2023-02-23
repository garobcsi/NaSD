<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreatureTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('creature')->delete();
        
        \DB::table('creature')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 1,
                'money' => 0,
                'hunger' => 100,
                'health' => 100,
                'mood' => 100,
                'energy' => 100,
                'cleanness' => 100,
                'created_at' => '2023-02-21 12:24:41',
                'updated_at' => '2023-02-21 12:24:41',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 2,
                'money' => 0,
                'hunger' => 100,
                'health' => 100,
                'mood' => 100,
                'energy' => 100,
                'cleanness' => 100,
                'created_at' => '2023-02-22 12:41:31',
                'updated_at' => '2023-02-22 12:41:31',
            ),
        ));
        
        
    }
}