<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */



class PatientFactory extends Factory
{
    protected $model = Patient::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'date_of_birth' => $this->faker->date,
            'blood_type' => $this->faker->randomElement(['A', 'B', 'AB', 'O']),
        ];
    }
}