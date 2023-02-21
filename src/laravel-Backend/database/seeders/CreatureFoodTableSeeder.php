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
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 1,
                'id' => 1,
            ),
            1 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 2,
                'id' => 2,
            ),
            2 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 3,
                'id' => 3,
            ),
            3 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 4,
                'id' => 4,
            ),
            4 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 5,
                'id' => 5,
            ),
            5 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 6,
                'id' => 6,
            ),
            6 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 7,
                'id' => 7,
            ),
            7 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 8,
                'id' => 8,
            ),
            8 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 9,
                'id' => 9,
            ),
            9 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 10,
                'id' => 10,
            ),
            10 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 11,
                'id' => 11,
            ),
            11 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 12,
                'id' => 12,
            ),
            12 =>
            array (
                'amount' => 0,
                'creature_id' => 1,
                'food_id' => 13,
                'id' => 13,
            ),
        ));


    }
}
