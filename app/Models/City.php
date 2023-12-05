<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory, HasUuids, SoftDeletes;
    protected $fillable = ['country_id', 'name', 'lat', 'long'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
