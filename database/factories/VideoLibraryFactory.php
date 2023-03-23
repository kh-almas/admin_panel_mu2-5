<?php

namespace Database\Factories;

use App\Models\VideoLibrary;
use Illuminate\Database\Eloquent\Factories\Factory;

class VideoLibraryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VideoLibrary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id'=>rand(1, 2),
            'name' => $this->faker->text(50),
            'link' => 'mov_bbb.mp4',
            'thumbnail' => 'default.jpg',
            'size' => rand(2000000, 5000000),
            'description' => $this->faker->text(100),
        ];
    }
}
