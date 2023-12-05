<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Country;
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
        $uk = Country::where('name', 'United Kingdom')->firstOrFail();
        $us = Country::where('name', 'United States')->firstOrFail();
        // dd($uk->id, $us->id);
        City::create([
            'country_id' => $uk->id,
            'name' => 'New York',
            'lat' => 40.712776,
            'long' => -74.005974,
        ]);

        City::create([
            'country_id' => $us->id,
            'name' => 'London',
            'lat' => 51.507351,
            'long' => -0.127758,
        ]);
    }
}
