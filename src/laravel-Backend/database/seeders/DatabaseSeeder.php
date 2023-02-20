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
            FoodTypeSeeder::class,
            ClothingType::class,
        ]);
        $this->call(UsersTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
    }
}
