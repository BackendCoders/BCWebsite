<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $title = fake()->catchPhrase();
        $startsAt = fake()->dateTimeBetween('-30 days', '+10 days');
        $endsAt = (clone $startsAt)->modify('+'.fake()->numberBetween(1, 14).' days');

        return [
            'service_category_id' => ServiceCategory::factory(),
            'title' => $title,
            'slug' => Str::slug($title).'-'.fake()->unique()->numerify('##'),
            'duration' => fake()->randomElement(['2 weeks', '1 month', '3 days', '48 hours']),
            'price' => fake()->randomFloat(2, 199, 1299),
            'summary' => fake()->sentence(),
            'details' => fake()->paragraph(4),
            'status' => fake()->boolean(80),
            'priority' => fake()->numberBetween(1, 100),
            'metadata' => [
                'delivery' => fake()->randomElement(['document', 'email', 'platform']),
                'revisions' => fake()->numberBetween(1, 5),
                'support' => fake()->randomElement(['email', 'slack', 'phone']),
            ],
            'starts_at' => $startsAt,
            'ends_at' => $endsAt,
        ];
    }
}
