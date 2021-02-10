<?php

namespace Database\Factories;

use App\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    protected $user_types = ['player', 'coach'];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'user_type' => $this->faker->randomElement($this->user_types),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'ranking' => $this->faker->numberBetween(0, 5),
            'can_play_goalie' => $this->faker->boolean
        ];
    }
}
