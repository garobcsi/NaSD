<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            FoodSeeder::class,
            ClothingType::class,
        ]);
        $this->call(UsersTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(CreatureTableSeeder::class);
        $this->call(CreatureFoodTableSeeder::class);
    }
}
