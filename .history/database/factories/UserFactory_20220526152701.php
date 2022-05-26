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
            'email' => $this->faker->unique()->safeEmail(),
            'employerid', 255)->nullable();
            'firstname', 255)->nullable();
            'lastname', 255)->nullable();
            'email', 255)->nullable();
            'phone', 255)->nullable();
            'role', 255)->nullable();
            'username', 255)->nullable();
            'password', 255)->nullable();
            'saread', 255)->nullable();
            'sawrite', 255)->nullable();
            'sadelete', 255)->nullable();
            'aread', 255)->nullable();
            'awrite', 255)->nullable();
            'adelete', 255)->nullable();
            'eread', 255)->nullable();
            'ewrite', 255)->nullable();
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
