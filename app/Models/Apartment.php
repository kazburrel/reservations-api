<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Apartment extends Model
{
    use HasFactory, HasUuids, SoftDeletes;

    protected $fillable = [
        'property_id',
        'apartment_type_id',
        'name',
        'capacity_adults',
        'capacity_children',
        'size',
        'bathrooms',
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }

    public function apartment_type()
    {
        return $this->belongsTo(ApartmentType::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
