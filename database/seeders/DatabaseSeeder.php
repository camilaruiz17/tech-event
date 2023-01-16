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
            'alertName' => 'Thanos ataca Madrid',
            'description' => 'Thanos va a atacar Madrid con su guante',
            'heroesRequired' => 10,
            'img' => '/imgSlider/thanosAttacksMadrid.jpg',
            'datetime'=> '2022-12-20 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Thanos ataca Madrid',
            'description' => 'Thanos va a atacar Madrid con su guante',
            'heroesRequired' => 10,
            'img' => '/imgSlider/venomAttacksJersey.jpg',
            'datetime'=> '2022-12-20 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Thanos ataca Madrid',
            'description' => 'Thanos va a atacar Madrid con su guante',
            'heroesRequired' => 10,
            'img' => '/imgSlider/greenGobblinAttacksLondon.jpg',
            'datetime'=> '2022-12-20 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Thanos ataca Madrid',
            'description' => 'Thanos va a atacar Madrid con su guante',
            'heroesRequired' => 10,
            'img' => '/imgSlider/mysterioAttacksNewYork.jpg',
            'datetime'=> '2022-12-20 14:00:00',
        ]);
        Crime::factory()->create([
            'alertName' => 'Thanos ataca Madrid',
            'description' => 'Thanos va a atacar Madrid con su guante',
            'heroesRequired' => 10,
            'img' => 'https://www.royalcanin.com/es/dogs/breeds/breed-library/billy',
            'datetime'=> '2022-12-20 14:00:00',
        ]);
    

        Crime::factory(20)->create();

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
