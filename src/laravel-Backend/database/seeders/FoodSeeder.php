<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("food")->insert([
            [
                "id" => 1,
                "name" => "Sushi",
                "type" => "étel",
                "health_amount" => 2,
                "energy_amount" => 0,
                "hunger_amount" =>15,
                "price" => 0
            ],
            [
                "id" => 2,
                "name" => "Barack",
                "type" => "étel",
                "health_amount" => 5,
                "energy_amount" => 0,
                "hunger_amount" =>10,
                "price" => 0
            ],
            [
                "id" => 3,
                "name" => "Húsleves",
                "type" => "étel",
                "health_amount" => 7,
                "energy_amount" => 0,
                "hunger_amount" =>15,
                "price" => 0
            ],
            [
                "id" => 4,
                "name" => "Pizza",
                "type" => "étel",
                "health_amount" => -1,
                "energy_amount" => 0,
                "hunger_amount" =>30,
                "price" => 0
            ],
            [
                "id" => 5,
                "name" => "Sajtburger",
                "type" => "étel",
                "health_amount" => -2,
                "energy_amount" => 0,
                "hunger_amount" =>30,
                "price" => 0
            ],
            [
                "id" => 6,
                "name" => "Sültburgonya",
                "type" => "étel",
                "health_amount" => -2,
                "energy_amount" => 0,
                "hunger_amount" =>30,
                "price" => 0
            ],
            [
                "id" => 7,
                "name" => "Kávé",
                "type" => "ital",
                "health_amount" => -1,
                "energy_amount" => 30,
                "hunger_amount" =>1,
                "price" => 0
            ],
            [
                "id" => 8,
                "name" => "Energia ital",
                "type" => "ital",
                "health_amount" => -5,
                "energy_amount" => 45,
                "hunger_amount" =>2,
                "price" => 0
            ],
            [
                "id" => 9,
                "name" => "Tea",
                "type" => "ital",
                "health_amount" => 2,
                "energy_amount" => 15,
                "hunger_amount" =>2,
                "price" => 0
            ],
            [
                "id" => 10,
                "name" => "Alma lé",
                "type" => "ital",
                "health_amount" => 4,
                "energy_amount" => 5,
                "hunger_amount" =>4,
                "price" => 0
            ],
            [
                "id" => 11,
                "name" => "Életerő bomba",
                "type" => "gyógyszer",
                "health_amount" => 30,
                "energy_amount" => 0,
                "hunger_amount" =>0,
                "price" => 0
            ],
            [
                "id" => 12,
                "name" => "Energia bomba",
                "type" => "gyógyszer",
                "health_amount" => -5,
                "energy_amount" => 100,
                "hunger_amount" =>0,
                "price" => 0
            ],
            [
                "id" => 13,
                "name" => "Kalória bomba",
                "type" => "gyógyszer",
                "health_amount" => -5,
                "energy_amount" => 0,
                "hunger_amount" =>100,
                "price" => 0
            ],
        ]);
    }
}
