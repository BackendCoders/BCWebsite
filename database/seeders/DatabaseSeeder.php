<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
    ['email' => 'admin@example.com'], // check condition
    [
        'name' => 'System Admin',
        'role' => User::ROLE_ADMIN,
        'password' => Hash::make('AdminPass123!'),
    ]
);

        

        // ServiceCategory::factory() ->count(6) ->create() 
        // ->each(function (ServiceCategory $category) 
        // { 
        //     Service::factory() ->count(fake()->numberBetween(2, 3)) 
        // ->state(['service_category_id' => $category->id]) ->create();
        //  });
    }
}
