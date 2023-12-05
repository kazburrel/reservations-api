<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Nonstandard\Uuid;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $id = Uuid::uuid4();
        City::create([
            'country_id' => $id,
            'name' => 'New York',
            'lat' => 40.712776,
            'long' => -74.005974,
        ]);

        City::create([
            'country_id' => $id,
            'name' => 'London',
            'lat' => 51.507351,
            'long' => -0.127758,
        ]);
    }
}
