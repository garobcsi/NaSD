<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreatureFoodTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('creature_food')->delete();
        
        \DB::table('creature_food')->insert(array (
            0 => 
            array (
                'id' => 1,
                'creature_id' => 1,
                'food_id' => 1,
                'amount' => 0,
            ),
            1 => 
            array (
                'id' => 2,
                'creature_id' => 1,
                'food_id' => 2,
                'amount' => 0,
            ),
            2 => 
            array (
                'id' => 3,
                'creature_id' => 1,
                'food_id' => 3,
                'amount' => 0,
            ),
            3 => 
            array (
                'id' => 4,
                'creature_id' => 1,
                'food_id' => 4,
                'amount' => 0,
            ),
            4 => 
            array (
                'id' => 5,
                'creature_id' => 1,
                'food_id' => 5,
                'amount' => 0,
            ),
            5 => 
            array (
                'id' => 6,
                'creature_id' => 1,
                'food_id' => 6,
                'amount' => 0,
            ),
            6 => 
            array (
                'id' => 7,
                'creature_id' => 1,
                'food_id' => 7,
                'amount' => 0,
            ),
            7 => 
            array (
                'id' => 8,
                'creature_id' => 1,
                'food_id' => 8,
                'amount' => 0,
            ),
            8 => 
            array (
                'id' => 9,
                'creature_id' => 1,
                'food_id' => 9,
                'amount' => 0,
            ),
            9 => 
            array (
                'id' => 10,
                'creature_id' => 1,
                'food_id' => 10,
                'amount' => 0,
            ),
            10 => 
            array (
                'id' => 11,
                'creature_id' => 1,
                'food_id' => 11,
                'amount' => 0,
            ),
            11 => 
            array (
                'id' => 12,
                'creature_id' => 1,
                'food_id' => 12,
                'amount' => 0,
            ),
            12 => 
            array (
                'id' => 13,
                'creature_id' => 1,
                'food_id' => 13,
                'amount' => 0,
            ),
            13 => 
            array (
                'id' => 14,
                'creature_id' => 2,
                'food_id' => 1,
                'amount' => 0,
            ),
            14 => 
            array (
                'id' => 15,
                'creature_id' => 2,
                'food_id' => 2,
                'amount' => 0,
            ),
            15 => 
            array (
                'id' => 16,
                'creature_id' => 2,
                'food_id' => 3,
                'amount' => 0,
            ),
            16 => 
            array (
                'id' => 17,
                'creature_id' => 2,
                'food_id' => 4,
                'amount' => 0,
            ),
            17 => 
            array (
                'id' => 18,
                'creature_id' => 2,
                'food_id' => 5,
                'amount' => 0,
            ),
            18 => 
            array (
                'id' => 19,
                'creature_id' => 2,
                'food_id' => 6,
                'amount' => 0,
            ),
            19 => 
            array (
                'id' => 20,
                'creature_id' => 2,
                'food_id' => 7,
                'amount' => 0,
            ),
            20 => 
            array (
                'id' => 21,
                'creature_id' => 2,
                'food_id' => 8,
                'amount' => 0,
            ),
            21 => 
            array (
                'id' => 22,
                'creature_id' => 2,
                'food_id' => 9,
                'amount' => 0,
            ),
            22 => 
            array (
                'id' => 23,
                'creature_id' => 2,
                'food_id' => 10,
                'amount' => 0,
            ),
            23 => 
            array (
                'id' => 24,
                'creature_id' => 2,
                'food_id' => 11,
                'amount' => 0,
            ),
            24 => 
            array (
                'id' => 25,
                'creature_id' => 2,
                'food_id' => 12,
                'amount' => 0,
            ),
            25 => 
            array (
                'id' => 26,
                'creature_id' => 2,
                'food_id' => 13,
                'amount' => 0,
            ),
        ));
        
        
    }
}