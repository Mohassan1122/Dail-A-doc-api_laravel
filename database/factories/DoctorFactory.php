<?php
namespace Database\Factories;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'specialization' => $this->faker->jobTitle,
            'qualification' => $this->faker->sentence,
            'bio' => $this->faker->paragraph,
        ];
    }
}