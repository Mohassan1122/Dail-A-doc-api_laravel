<?php
namespace Database\Factories;
use App\Models\Facility;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FacilityFactory extends Factory
{
    protected $model = Facility::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'type' => $this->faker->randomElement(['Hospital', 'Clinic', 'Lab']),
            'address' => $this->faker->address,
        ];
    }
}