<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClothingType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("clothing")->insert([
            ["id" => 1,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Fehér"],
            ["id" => 2,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Piros"],
            ["id" => 3,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Narancssárga"],
            ["id" => 4,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Rózsaszín"],
            ["id" => 5,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Sárga"],
            ["id" => 6,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Zöld"],
            ["id" => 7,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Világos Zöld"],
            ["id" => 8,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Kék"],
            ["id" => 9,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Lila"],
            ["id" => 10,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Barana"],
            ["id" => 11,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Szürke"],

            ["id" => 12,"name" => "Klasszikus poló", "type" => "poló", "color" => "Fehér"],
            ["id" => 13,"name" => "Klasszikus poló", "type" => "poló", "color" => "Piros"],
            ["id" => 14,"name" => "Klasszikus poló", "type" => "poló", "color" => "Narancssárga"],
            ["id" => 15,"name" => "Klasszikus poló", "type" => "poló", "color" => "Rózsaszín"],
            ["id" => 16,"name" => "Klasszikus poló", "type" => "poló", "color" => "Sárga"],
            ["id" => 17,"name" => "Klasszikus poló", "type" => "poló", "color" => "Zöld"],
            ["id" => 18,"name" => "Klasszikus poló", "type" => "poló", "color" => "Világos Zöld"],
            ["id" => 19,"name" => "Klasszikus poló", "type" => "poló", "color" => "Kék"],
            ["id" => 20,"name" => "Klasszikus poló", "type" => "poló", "color" => "Lila"],
            ["id" => 21,"name" => "Klasszikus poló", "type" => "poló", "color" => "Barana"],
            ["id" => 22,"name" => "Klasszikus poló", "type" => "poló", "color" => "Szürke"],

            ["id" => 23,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Fehér"],
            ["id" => 24,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Piros"],
            ["id" => 25,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Narancssárga"],
            ["id" => 26,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Rózsaszín"],
            ["id" => 27,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Sárga"],
            ["id" => 28,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Zöld"],
            ["id" => 29,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Világos Zöld"],
            ["id" => 30,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Kék"],
            ["id" => 31,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Lila"],
            ["id" => 32,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Barana"],
            ["id" => 33,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Szürke"],

            ["id" => 34,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Fehér"],
            ["id" => 35,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Piros"],
            ["id" => 36,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Narancssárga"],
            ["id" => 37,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Rózsaszín"],
            ["id" => 38,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Sárga"],
            ["id" => 39,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Zöld"],
            ["id" => 40,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Világos Zöld"],
            ["id" => 41,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Kék"],
            ["id" => 42,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Lila"],
            ["id" => 43,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Barana"],
            ["id" => 44,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Szürke"],
        ]);
    }
}
