<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Crime;
use App\Models\User;
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
            'alertName' => 'Thanos attacks Madrid',
            'description' => 'Thanos attacks Madrid...',
            'heroesRequired' => 10,
            'img' => '/imgCrimes/thanosMadrid.jpg',
            'datetime'=> '2023-02-20 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Venom attacks Jersey',
            'description' => 'Venom attacks Jersey...',
            'heroesRequired' => 8,
            'img' => '/imgCrimes/venomJersey.jpg',
            'datetime'=> '2023-02-22 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Green Goblin attacks London',
            'description' => 'Green Goblin attacks London...',
            'heroesRequired' => 9,
            'img' => '/imgCrimes/goblinLondon.jpg',
            'datetime'=> '2023-01-31 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Mysterio attacks New York',
            'description' => 'Mysterio attacks New York...',
            'heroesRequired' => 10,
            'img' => '/imgCrimes/mysterioNewYork.jpg',
            'datetime'=> '2023-01-23 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Loki attacks The Planet',
            'description' => 'Loki attacks The Planet...',
            'heroesRequired' => 20,
            'img' => '/imgCrimes/lokiThePlanet.jpg',
            'datetime'=> '2023-01-08 14:00:00',
        ]);
    
    

        Crime::factory(16)->create();

        User::factory()->create(['name' => 'admin', 'email' => 'admin@admin.com', 
        'isAdmin' => true]);

        User::factory()->create(['name' => 'user1', 'email' => 'user1@user1.com', 
        'isAdmin' => false]);
        
        //User::factory(5)->create();

        User::factory()
            ->has(Crime::factory()->count(5))
            ->create();

        Crime::factory()
            ->has(User::factory()->count(5))
            ->create();
    }
}
