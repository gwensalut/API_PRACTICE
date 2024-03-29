<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'age'=>rand(1,1000),
            'title'=>fake()->sentence(),
            'publish_at'=>fake()->date('y-m-d'),
            'gender'=>fake()->randomElement(['male','female']),
        ];
    }
}
