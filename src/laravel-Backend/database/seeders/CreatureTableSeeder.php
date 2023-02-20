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
                'cleanness' => 100,
                'created_at' => '2023-02-20 14:46:13',
                'energy' => 100,
                'health' => 100,
                'id' => 1,
                'money' => 0,
                'mood' => 100,
                'updated_at' => '2023-02-20 14:46:13',
                'user_id' => 1,
            ),
        ));
        
        
    }
}