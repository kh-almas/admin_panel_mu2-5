<?php

namespace Database\Factories;

use App\Models\Task;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'taskCategory_id'=>rand(1,10000),
            'user_id' => rand(1,1000),
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(1000),
            'important' => rand(0,1),
        ];
    }
}
