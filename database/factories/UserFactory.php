<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'security_number' => $this->faker->numberBetween(6000, 25000),
            'family_security_number' => $this->faker->numberBetween(6000, 25000),
            'date_of_birth' => $this->faker->dateTime,
            'phone' => $this->faker->phoneNumber,
            'citizenship_number' => $this->faker->unique()->numberBetween(10000, 90000),
            'state' => $this->faker->numberBetween(1, 6),
            'district' => $this->faker->city,
            'municipality' => $this->faker->address,
            'ward_no' => $this->faker->numberBetween(1, 22),
            'tole' => $this->faker->city,
            'sex' => $this->faker->randomElement(['male', 'female', 'other']),
            'marital_status' => $this->faker->randomElement(['0', '1']),
            'service_type' => $this->faker->randomElement(['2', '3']),
            'service' => $this->faker->randomElement(['0', '1']),
            'present_location' => $this->faker->randomElement(['home', 'foreign']),
            'role' => $this->faker->randomElement(['users']),
            'education_level' => $this->faker->randomElement(['primary', 'lower', 'secondary', 'senior_secondary', 'bachelor','master','phd']),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
