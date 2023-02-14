<?php

namespace Database\Factories;

use App\Models\Videonote;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideonoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Videonote::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'userID'=>'1',
            'videosID'=>'1',
            'text' => $this->faker->text(25),
        ];
    }
}
