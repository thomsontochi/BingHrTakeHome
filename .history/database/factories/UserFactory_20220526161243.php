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
            'employerid' =>  $this ->faker->unique()->randomNumber($nbDigits = 3, $strict = true),
            'firstname' => $this->faker->firstname(),
            'lastname' => $this->faker->lastname(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('###-###-####'),
            'role' => $this->faker->randomElement(['admin', 'user', 'Editor']),
            'username' => $this->faker->username(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'saread' => $this->faker->randomElement(['read', 'wrtie']),
            'sawrite' => $this->faker->randomElement(['read', 'wrtie']),
            'sadelete' => $this->faker->randomElement(['read', 'wrtie']),
            'aread' => $this->faker->randomElement(['read', 'wrtie']),
            'awrite' => $this->faker->randomElement(['read', 'wrtie']),
            'adelete' => $this->faker->randomElement(['read', 'wrtie']),
            'eread' => $this->faker->randomElement(['read', 'wrtie']),
            'ewrite' => $this->faker->ewrite(),
            'edelete' => $this->faker->edelete(),
            'email_verified_at' => now(),
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
