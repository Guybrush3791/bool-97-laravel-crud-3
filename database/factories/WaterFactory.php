<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Water>
 */
class WaterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "code" => fake() -> numerify('##########'),
            "name" => fake() -> words(fake() -> numberBetween(1, 5), true),
            "price" => fake() -> numberBetween(0, 5000),
            "centilitres" => fake() -> numberBetween(1, 8) * 25,
            "picture" => "http://picsum.photos/350/350"
            // # centilitres:
            // multipli di 0.25 compresi tra 0.25 e 2.00 ??
            /**
             * 25 - 50 - 75 - 100 - 125 - 150 - 175 - 200
             * 25 * [1~8]
             */
        ];
    }
}
