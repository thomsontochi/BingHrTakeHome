<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{

    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'employerid' => $this->faker->V
            'firstname' => $this->faker->
            'lastname' => $this->faker->
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->
            'role' => $this->faker->
            'username' => $this->faker->
            'password' => $this->faker->
            'saread' => $this->faker->
            'sawrite' => $this->faker->
            'sadelete' => $this->faker->
            'aread' => $this->faker->
            'awrite' => $this->faker->
            'adelete' => $this->faker->
            'eread' => $this->faker->
            'ewrite' => $this->faker->
            'edelete', 500)->nullable();
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
