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
            ["id" => 1, "name" => "Sushi","health_amount" => 2, "nutritious_amount" =>15,"energy_amount" => 0],
            ["id" => 2, "name" => "Barack","health_amount" => 5, "nutritious_amount" =>10,"energy_amount" => 0],
            ["id" => 3, "name" => "Húsleves","health_amount" => 5, "nutritious_amount" =>15,"energy_amount" => 0],
            ["id" => 4, "name" => "Pizza","health_amount" => -1, "nutritious_amount" =>30,"energy_amount" => 0],
            ["id" => 5, "name" => "Sajtburger","health_amount" => -1, "nutritious_amount" =>30,"energy_amount" => 0],
            ["id" => 6, "name" => "Sültburgonya","health_amount" => -1, "nutritious_amount" =>30,"energy_amount" => 0],
            ["id" => 6, "name" => "Kávé","health_amount" => -1, "nutritious_amount" =>1,"energy_amount" => 30],
            ["id" => 6, "name" => "Energia ital","health_amount" => -3, "nutritious_amount" =>2,"energy_amount" => 45],
            ["id" => 6, "name" => "Tea","health_amount" => 2, "nutritious_amount" =>2,"energy_amount" => 15],
            ["id" => 6, "name" => "Alma lé","health_amount" => 4, "nutritious_amount" =>4,"energy_amount" => 5],
        ]);
    }
}
