<?php

namespace Database\Factories;

use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<ServiceCategory>
 */
class ServiceCategoryFactory extends Factory
{
    protected $model = ServiceCategory::class;

    public function definition(): array
    {
        $name = fake()->unique()->jobTitle();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => fake()->paragraph(),
            'icon' => 'uil uil-categories',
            'cover_image' => 'https://images.unsplash.com/photo-'.fake()->numerify('1##########').'',
            'color' => fake()->safeColorName(),
            'priority' => fake()->numberBetween(1, 10),
            'is_featured' => fake()->boolean(30),
            'status' => true,
        ];
    }
}
