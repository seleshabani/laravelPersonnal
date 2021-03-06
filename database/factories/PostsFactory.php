<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    protected $model = Posts::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'content' => $this->faker->text(200),
            'image' => 'images/A7Wf4GM5dOZfka2Ccr1uJjPoq26XCb7sO9QL2p0w.jpg',
            // 'categorie_id' => Categories::find(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
