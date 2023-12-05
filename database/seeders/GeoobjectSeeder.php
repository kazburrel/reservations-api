<?php

namespace Database\Seeders;

use App\Models\Geoobject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Ramsey\Uuid\Uuid;

class GeoobjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Geoobject::create([
            'city_id' => Uuid::uuid4(),
            'name' => 'Statue of Liberty',
            'lat' => 40.689247,
            'long' => -74.044502
        ]);
 
        Geoobject::create([
            'city_id' => Uuid::uuid4(),
            'name' => 'Big Ben',
            'lat' => 51.500729,
            'long' => -0.124625
        ]);
    }
}
