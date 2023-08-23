<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Country;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Country::create(['name' => 'United States']);
        Country::create(['name' => 'Canada']);

        City::create(['country_id' => 1, 'name' => 'New York']);
        City::create(['country_id' => 1, 'name' => 'Los Angeles']);
        City::create(['country_id' => 1, 'name' => 'Chicago']);

        City::create(['country_id' => 2, 'name' => 'Toronto']);
        City::create(['country_id' => 2, 'name' => 'Montreal']);
        City::create(['country_id' => 2, 'name' => 'Vancouver']);

        Tag::create(['name' => 'PHP', 'slug' => 'php']);
        Tag::create(['name' => 'Laravel', 'slug' => 'laravel']);
        Tag::create(['name' => 'JavaScript', 'slug' => 'javascript']);
    }
}
