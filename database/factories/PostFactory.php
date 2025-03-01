<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $idPicture = $this->faker->numberBetween(1, 250);
        return [
            'title' => $this->faker->sentence,
            'picture' => 'https://picsum.photos/id/' . $idPicture . "/800/400",
            'content' => $this->faker->paragraph,
            'user_id' => User::factory(),
            'slug' => $this->faker->unique()->slug,
            'category_id' => Category::factory(),
        ];
    }
}
