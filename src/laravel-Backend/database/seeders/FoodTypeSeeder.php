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
            ["id" => 1, "name" => "Sushi","health_amount" => "5", "nutritious_amount" =>"15"],
            ["id" => 2, "name" => "Barack","health_amount" => "10", "nutritious_amount" =>"10"],
            ["id" => 3, "name" => "Húsleves","health_amount" => "15", "nutritious_amount" =>"15"],
            ["id" => 4, "name" => "Pizza","health_amount" => "-5", "nutritious_amount" =>"30"],
            ["id" => 5, "name" => "Sajtburger","health_amount" => "-5", "nutritious_amount" =>"30"],
            ["id" => 6, "name" => "Sültburgonya","health_amount" => "-5", "nutritious_amount" =>"30"],
        ]);
    }
}
