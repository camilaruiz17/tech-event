<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Crime;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Crime::factory()->create([
           'alertName' => 'Thanos ataca Madrid',
           'description' => 'Thanos va a atacar Madrid con su guante de mielda',
           'heroesRequired' => 10,
           'img' => 'https://www.royalcanin.com/es/dogs/breeds/breed-library/billy',
           'datetime'=> '2022-12-20 14:00:00',
         ]);

        Crime::factory(5)->create();
    }
}
