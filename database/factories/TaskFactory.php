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
            'taskCategory_id'=>rand(1,150),
            'user_id' => rand(1,5),
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(200),
            'important' => rand(0,1),
        ];
    }
}
