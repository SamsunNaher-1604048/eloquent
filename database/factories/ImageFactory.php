<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $noatable = [
            User::class,
            Post::class
        ];

        return [
            'url'=>$this->faker->imageUrl($width=640, $height=480),
            'imageable_id'=> $this->faker->numberBetween(1,10),
            'imageable_type'=>$this->faker->randomElement($noatable)
        ];
    }
}
