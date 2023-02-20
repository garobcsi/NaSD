<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("food_type")->insert([
            [
                "id" => 1,
                "name" => "Sushi",
                "type" => "étel",
                "health_amount" => 2,
                "energy_amount" => 0,
                "nutritious_amount" =>15,
            ],
            [
                "id" => 2,
                "name" => "Barack",
                "type" => "étel",
                "health_amount" => 5,
                "energy_amount" => 0,
                "nutritious_amount" =>10,
            ],
            [
                "id" => 3,
                "name" => "Húsleves",
                "type" => "étel",
                "health_amount" => 5,
                "energy_amount" => 0,
                "nutritious_amount" =>15,
            ],
            [
                "id" => 4,
                "name" => "Pizza",
                "type" => "étel",
                "health_amount" => -1,
                "energy_amount" => 0,
                "nutritious_amount" =>30,
            ],
            [
                "id" => 5,

                "name" => "Sajtburger",
                "type" => "étel",
                "health_amount" => -1,
                "energy_amount" => 0,
                "nutritious_amount" =>30,
            ],
            [
                "id" => 6,
                "name" => "Sültburgonya",
                "type" => "étel",
                "health_amount" => -1,
                "energy_amount" => 0,
                "nutritious_amount" =>30,
            ],
            [
                "id" => 7,
                "name" => "Kávé",
                "type" => "ital",
                "health_amount" => -1,
                "energy_amount" => 30,
                "nutritious_amount" =>1,
            ],
            [
                "id" => 8,
                "name" => "Energia ital",
                "type" => "ital",
                "health_amount" => -3,
                "energy_amount" => 45,
                "nutritious_amount" =>2,
            ],
            [
                "id" => 9,
                "name" => "Tea",
                "type" => "ital",
                "health_amount" => 2,
                "energy_amount" => 15,
                "nutritious_amount" =>2,
            ],
            [
                "id" => 10,
                "name" => "Alma lé",
                "type" => "ital",
                "health_amount" => 4,
                "energy_amount" => 5,
                "nutritious_amount" =>4,
            ],
            [
                "id" => 11,
                "name" => "Életerő bomba",
                "type" => "gyógyszer",
                "health_amount" => 30,
                "energy_amount" => 0,
                "nutritious_amount" =>0,
            ],
            [
                "id" => 12,
                "name" => "Energia bomba",
                "type" => "gyógyszer",
                "health_amount" => -5,
                "energy_amount" => 30,
                "nutritious_amount" =>0,
            ],
            [
                "id" => 13,
                "name" => "Kalória bomba",
                "type" => "gyógyszer",
                "health_amount" => -5,
                "energy_amount" => 0,
                "nutritious_amount" =>30,
            ],
        ]);
    }
}
