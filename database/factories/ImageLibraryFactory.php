<?php

namespace Database\Factories;

use App\Models\ImageLibrary;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageLibraryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ImageLibrary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'person_id'=>rand(1, 2),
            'link' => rand(1, 8).'.jpg',
            'size' => rand(2000, 5000),
            'description' => $this->faker->text(1000),
        ];
    }
}
