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
        'name',
        'capacity_adults',
        'capacity_children'
    ];

    public function property()
    {
        return $this->belongsTo(Property::class);
    }
}
