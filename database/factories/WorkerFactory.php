<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Worker>
 */
class WorkerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name'=>fake()->name(),
            'email'=>fake()->email(),
            'phone'=>fake()->phoneNumber(),
            'age'=>fake()->NumberBetween(18,40),
            'password'=>fake()->password(),
            'address'=>fake()->address(),
            'city'=>fake()->city(),
            'salary'=>fake()->NumberBetween(2000,9000),
        ];
    }
}
