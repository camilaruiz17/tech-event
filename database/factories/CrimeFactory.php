<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CrimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'alertName' => $this->faker->company(),
            'description' => $this->faker->realText(),
            'heroesRequired' => $this->faker->biasedNumberBetween($min = 1, $max = 20),
            'img' => $this->faker->imageUrl(),
            'datetime' => $this->faker->dateTime(),
            'important' => $this->faker->biasedNumberBetween($min = 0, $max = 1),
        ];
    }
}
