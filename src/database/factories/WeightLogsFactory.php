<?php

namespace Database\Factories;

use App\Models\WeightLogs;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightLogsFactory extends Factory
{

    protected $model = WeightLogs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'date' => $this->faker->dateTimeBetween('-1year', 'now')->format('Y-m-d'),
            'weight' => $this->faker->randomFloat(1, 70, 51),
            'calories' => $this->faker->numberBetween(500, 1000),
            'exercise_time' => $this->faker->time(),
            'exercise_content' => $this->faker->text(120),
        ];
    }
}
