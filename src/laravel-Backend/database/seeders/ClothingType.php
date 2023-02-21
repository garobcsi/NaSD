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
            ["id" => 1,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Fehér","price" => 0],
            ["id" => 2,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Piros","price" => 0],
            ["id" => 3,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Narancssárga","price" => 0],
            ["id" => 4,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Rózsaszín","price" => 0],
            ["id" => 5,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Sárga","price" => 0],
            ["id" => 6,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Zöld","price" => 0],
            ["id" => 7,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Világos Zöld","price" => 0],
            ["id" => 8,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Kék","price" => 0],
            ["id" => 9,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Lila","price" => 0],
            ["id" => 10,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Barana","price" => 0],
            ["id" => 11,"name" => "Klasszikus kalap", "type" => "kalap", "color" => "Szürke","price" => 0],

            ["id" => 12,"name" => "Klasszikus poló", "type" => "poló", "color" => "Fehér","price" => 0],
            ["id" => 13,"name" => "Klasszikus poló", "type" => "poló", "color" => "Piros","price" => 0],
            ["id" => 14,"name" => "Klasszikus poló", "type" => "poló", "color" => "Narancssárga","price" => 0],
            ["id" => 15,"name" => "Klasszikus poló", "type" => "poló", "color" => "Rózsaszín","price" => 0],
            ["id" => 16,"name" => "Klasszikus poló", "type" => "poló", "color" => "Sárga","price" => 0],
            ["id" => 17,"name" => "Klasszikus poló", "type" => "poló", "color" => "Zöld","price" => 0],
            ["id" => 18,"name" => "Klasszikus poló", "type" => "poló", "color" => "Világos Zöld","price" => 0],
            ["id" => 19,"name" => "Klasszikus poló", "type" => "poló", "color" => "Kék","price" => 0],
            ["id" => 20,"name" => "Klasszikus poló", "type" => "poló", "color" => "Lila","price" => 0],
            ["id" => 21,"name" => "Klasszikus poló", "type" => "poló", "color" => "Barana","price" => 0],
            ["id" => 22,"name" => "Klasszikus poló", "type" => "poló", "color" => "Szürke","price" => 0],

            ["id" => 23,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Fehér","price" => 0],
            ["id" => 24,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Piros","price" => 0],
            ["id" => 25,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Narancssárga","price" => 0],
            ["id" => 26,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Rózsaszín","price" => 0],
            ["id" => 27,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Sárga","price" => 0],
            ["id" => 28,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Zöld","price" => 0],
            ["id" => 29,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Világos Zöld","price" => 0],
            ["id" => 30,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Kék","price" => 0],
            ["id" => 31,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Lila","price" => 0],
            ["id" => 32,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Barana","price" => 0],
            ["id" => 33,"name" => "Klasszikus nadrág", "type" => "nadrág", "color" => "Szürke","price" => 0],

            ["id" => 34,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Fehér","price" => 0],
            ["id" => 35,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Piros","price" => 0],
            ["id" => 36,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Narancssárga","price" => 0],
            ["id" => 37,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Rózsaszín","price" => 0],
            ["id" => 38,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Sárga","price" => 0],
            ["id" => 39,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Zöld","price" => 0],
            ["id" => 40,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Világos Zöld","price" => 0],
            ["id" => 41,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Kék","price" => 0],
            ["id" => 42,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Lila","price" => 0],
            ["id" => 43,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Barana","price" => 0],
            ["id" => 44,"name" => "Klasszikus cipő", "type" => "cipő", "color" => "Szürke","price" => 0],
        ]);
    }
}
