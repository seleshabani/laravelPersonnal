<?php

namespace Database\Factories;

use App\Models\Categories;
use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriesFactory extends Factory
{
    protected $model = Categories::class;
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
            'description'=>$this->faker->text(100)
        ];
    }

    public function configure()
    {
        return $this->afterMaking(function (Categories $categories) {
        })->afterCreating(function (Categories $categories) {
            Posts::factory()::new(['categorie_id'=>$categories->getkey()])->count(5)->create();
            
        });
    }

}
